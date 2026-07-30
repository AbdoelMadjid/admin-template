@php
    $locale = App::getLocale();
    $segments = request()->segments();
    $parentSegments = count($segments) > 1 ? array_slice($segments, 0, -1) : [];
    $lastSegment = count($segments) ? end($segments) : null;
    $translationsEn = [];
    $translationsId = [];

    $enPath = public_path('data/translations/en.json');
    $idPath = public_path('data/translations/id.json');

    if (is_file($enPath)) {
        $translationsEn = json_decode(file_get_contents($enPath), true) ?: [];
    }
    if (is_file($idPath)) {
        $translationsId = json_decode(file_get_contents($idPath), true) ?: [];
    }

    $reverseEn = [];
    foreach ($translationsEn as $key => $value) {
        if (is_string($value) && $value !== '') {
            $reverseEn[$value] = $key;
        }
    }

    $translateText = function (?string $text, ?string $langKey = null) use ($locale, $translationsEn, $translationsId, $reverseEn): string {
        $text = (string) ($text ?? '');
        if ($text === '') {
            return '';
        }

        if ($locale !== 'id') {
            return $text;
        }

        if ($langKey && isset($translationsId[$langKey])) {
            return (string) $translationsId[$langKey];
        }

        if (isset($reverseEn[$text])) {
            $resolvedKey = $reverseEn[$text];
            if (isset($translationsId[$resolvedKey])) {
                return (string) $translationsId[$resolvedKey];
            }
        }

        return $text;
    };

    $normalize = function (string $value): string {
        return preg_replace('/[^a-z0-9]/', '', strtolower($value));
    };

    $singularize = function (string $value): string {
        return str_ends_with($value, 's') ? substr($value, 0, -1) : $value;
    };

    $resolveSegmentLabel = function (string $segment) use ($locale, $translationsEn, $translationsId, $normalize, $singularize): string {
        $formatted = \Illuminate\Support\Str::of($segment)
            ->replace(['-', '_'], ' ')
            ->title()
            ->replace('Ui', 'UI')
            ->replace('Api', 'API')
            ->toString();

        if ($locale !== 'id') {
            return $formatted;
        }

        $needle = $singularize($normalize($formatted));

        foreach ($translationsEn as $key => $enValue) {
            if (!is_string($enValue) || $enValue === '') {
                continue;
            }

            $candidate = $singularize($normalize($enValue));
            if ($candidate === $needle && isset($translationsId[$key])) {
                return (string) $translationsId[$key];
            }
        }

        return $formatted;
    };

    $resolvedTitle = '';
    if ($lastSegment && !preg_match('/^index(?:-\d+)?$/', $lastSegment)) {
        $resolvedTitle = $resolveSegmentLabel($lastSegment);
    } else {
        $resolvedTitle = $translateText($title ?? '', $title_lang_key ?? null);
    }
@endphp

@if ($title)
    <div class="page-title-head d-flex align-items-center">
        <div class="flex-grow-1">
            <h4 class="fs-sm text-uppercase fw-bold m-0" @if(isset($title_lang_key)) data-lang="{{ $title_lang_key }}" @endif>{{ $resolvedTitle }}</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                @foreach ($parentSegments as $segment)
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">{{ $resolveSegmentLabel($segment) }}</a>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
@endif
