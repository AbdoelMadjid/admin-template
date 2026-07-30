@extends('layouts.vertical', ['title' => 'Tabler Icons'])

@section('html_attribute')
    data-menu-color="dark"
@endsection

@section('css')
    <style>
        .icon-grid-six {
            --tabler-icon-size: 24px;
            --tabler-icon-color: #000000;
            display: grid;
            grid-template-columns: repeat(8, minmax(0, 1fr));
            gap: 1rem;
            justify-items: center;
            align-items: start;
            text-align: center;
        }

        .icon-grid-six .inner-icon-item .avatar-title i {
            font-size: var(--tabler-icon-size) !important;
            color: var(--tabler-icon-color);
            transition: color 0.2s ease-in-out, font-size 0.2s ease-in-out;
        }

        .icon-toolbar {
            background: linear-gradient(180deg, rgba(13, 110, 253, 0.05), rgba(13, 110, 253, 0.01));
            border: 1px dashed rgba(33, 37, 41, 0.2);
            border-radius: 0.75rem;
            padding: 1rem;
        }

        .icon-toolbar .toolbar-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            color: #6c757d;
            margin-bottom: 0.35rem;
            display: inline-block;
            font-weight: 600;
        }

        .icon-toolbar .form-range {
            cursor: pointer;
        }

        .icon-toolbar .toolbar-control {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .icon-toolbar .color-control {
            min-height: 38px;
            border-radius: 0.5rem;
            padding: 0.2rem 0.3rem;
        }

        .icon-toolbar .toolbar-reset {
            min-height: 38px;
            height: 100%;
            border-radius: 0.5rem;
            padding-inline: 0.85rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .snippet-board {
            border: 1px dashed rgba(33, 37, 41, 0.2);
            border-radius: 0.75rem;
            background-color: #f8f9fa;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .snippet-cell {
            padding: 0.9rem 1rem;
            min-height: 92px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .snippet-cell+.snippet-cell {
            border-left: 1px dashed rgba(33, 37, 41, 0.2);
        }

        .snippet-title {
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #6c757d;
            margin-bottom: 0.45rem;
            font-weight: 600;
        }

        .snippet-preview {
            font-size: 48px;
            color: #000000;
            line-height: 1;
            min-height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .snippet-cell.centered {
            align-items: center;
            text-align: center;
        }

        .snippet-icon-name {
            margin-top: 0.45rem;
            font-size: 0.78rem;
            color: #6c757d;
            font-weight: 600;
        }

        .snippet-placeholder {
            color: #adb5bd;
            font-size: 0.82rem;
            font-weight: 500;
        }

        .snippet-code {
            font-family: var(--bs-font-monospace);
            background: #ffffff;
            border: 1px solid rgba(33, 37, 41, 0.1);
            border-radius: 0.5rem;
            padding: 0.55rem 0.7rem;
            margin: 0;
            color: #495057;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (max-width: 991.98px) {
            .snippet-cell+.snippet-cell {
                border-left: 0;
                border-top: 1px dashed rgba(33, 37, 41, 0.2);
            }
        }

        @media (max-width: 1200px) {
            .icon-grid-six {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }

        @media (max-width: 992px) {
            .icon-grid-six {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (max-width: 768px) {
            .icon-grid-six {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 480px) {
            .icon-grid-six {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
        }

        .grid-header {
            grid-column: 1 / -1;
            text-align: left;
            width: 100%;
        }

        .avatar-xxl {
            width: 100% !important;
            max-width: 150px;
            height: auto !important;
        }

        .avatar-title {
            aspect-ratio: 1 / 1;
            width: 100%;
            height: 100%;
        }

        .inner-icon-item {
            transition: all 0.2s ease-in-out;
            cursor: pointer;
            position: relative;
        }

        .inner-icon-item:hover {
            transform: scale(1.05);
            z-index: 5;
        }

        .inner-icon-item:active {
            transform: scale(0.95);
        }

        .inner-icon-item .copied-badge {
            position: absolute;
            top: 8px;
            right: 8px;
            z-index: 10;
            font-size: 0.68rem;
            letter-spacing: 0.03em;
            padding: 0.2rem 0.45rem;
        }

        .inner-icon-item.is-selected .avatar-title {
            background-color: rgba(13, 110, 253, 0.08);
            border-color: rgba(13, 110, 253, 0.45) !important;
            box-shadow: 0 0 0 2px rgba(13, 110, 253, 0.12);
        }
    </style>
@endsection

@section('content')
    @include('layouts.partials.page-title', ['subtitle' => 'Icons', 'title' => 'Tabler'])

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h4 class="card-title mb-1">Overview</h4>
                        <p class="mb-0 text-muted">Free and open source icons designed to make your website or app
                            attractive,
                            visually consistent and simply beautiful.</p>
                    </div> <!-- end card-header-->

                    <div class="card-body border-top border-dashed">
                        <div
                            class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mb-3">
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <h4 class="mt-0 mb-0">Icons</h4>
                                <p class="mb-0 text-muted"><i class="ti ti-info-circle me-1"></i> Click on any icon to copy
                                    its
                                    HTML code.</p>
                            </div>
                            <span id="iconVisibleCount" class="badge bg-light text-muted border">Showing 0 icons</span>
                        </div>

                        <div class="icon-toolbar mb-4">
                            <div class="row g-3 align-items-start">
                                <div class="col-lg-6">
                                    <div class="toolbar-control">
                                        <label for="iconSearch" class="toolbar-label">Search Icon</label>
                                        <div class="app-search">
                                            <input type="search" id="iconSearch" class="form-control"
                                                placeholder="Search icons...">
                                            <i class="ti ti-search app-search-icon text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="toolbar-control">
                                        <label for="iconSize" class="toolbar-label">Icon Size</label>
                                        <select id="iconSize" class="form-select">
                                            <option value="16">16</option>
                                            <option value="24" selected>24</option>
                                            <option value="32">32</option>
                                            <option value="48">48</option>
                                            <option value="64">64</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="toolbar-control">
                                        <label for="iconColor" class="toolbar-label">Icon Color</label>
                                        <div class="d-flex align-items-stretch gap-2 flex-grow-1">
                                            <input type="color" id="iconColor"
                                                class="form-control form-control-color color-control" value="#000000"
                                                title="Choose icon color">
                                            <span id="iconColorValue"
                                                class="badge bg-light text-muted border flex-grow-1 d-inline-flex align-items-center justify-content-center">#000000</span>
                                            <button type="button" id="toolbarReset"
                                                class="btn btn-light border toolbar-reset" title="Reset toolbar">
                                                <i class="ti ti-refresh"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="snippet-board">
                            <div class="row g-0">
                                <div class="col-lg-3">
                                    <div class="snippet-cell centered">
                                        <div class="snippet-title">Preview Icon</div>
                                        <div id="snippetPreview" class="snippet-preview"></div>
                                        <div id="snippetIconName" class="snippet-icon-name snippet-placeholder">Belum
                                            dipilih</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="snippet-cell">
                                        <div class="snippet-title">Hasil Snippet Icon</div>
                                        <p id="snippetCode" class="snippet-code mb-0 snippet-placeholder">Belum ada snippet
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="snippet-cell">
                                        <div class="snippet-title">Action</div>
                                        <div class="d-flex gap-2">
                                            <button type="button" id="copySnippetBtn" class="btn btn-primary flex-grow-1"
                                                disabled>
                                                <i class="ti ti-copy me-1"></i>Copy Snippet
                                            </button>
                                            <button type="button" id="clearSelectionBtn" class="btn btn-light border">
                                                <i class="ti ti-restore"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="icon-grid-six">
                            @include('component.icons.outline-icons')
                            @include('component.icons.filled-icons')
                        </div> <!-- end display-->

                        <div class="text-center mt-3">
                            <a href="https://tabler.io/icons" target="_blank" class="btn btn-danger">View All Icons</a>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row-->
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let selectedSnippet = '';
            let selectedIconClass = '';

            async function copyToClipboard(text) {
                try {
                    if (navigator.clipboard && window.isSecureContext) {
                        await navigator.clipboard.writeText(text);
                    } else {
                        throw new Error('Clipboard API unavailable');
                    }
                } catch (err) {
                    const textArea = document.createElement("textarea");
                    textArea.value = text;
                    textArea.style.position = "fixed";
                    textArea.style.left = "-999999px";
                    textArea.style.top = "-999999px";
                    document.body.appendChild(textArea);
                    textArea.focus();
                    textArea.select();
                    try {
                        document.execCommand('copy');
                        textArea.remove();
                    } catch (error) {
                        textArea.remove();
                        throw error;
                    }
                }
            }

            const snippetPreview = document.getElementById('snippetPreview');
            const snippetCode = document.getElementById('snippetCode');
            const snippetIconName = document.getElementById('snippetIconName');
            const copySnippetBtn = document.getElementById('copySnippetBtn');
            const clearSelectionBtn = document.getElementById('clearSelectionBtn');
            const snippetBoard = document.querySelector('.snippet-board');
            const cardHeaderAnchor = snippetBoard ? snippetBoard.closest('.card')?.querySelector('.card-header') :
                null;
            const searchInput = document.getElementById('iconSearch');
            const sizeInput = document.getElementById('iconSize');
            const colorInput = document.getElementById('iconColor');
            const colorValue = document.getElementById('iconColorValue');
            const resetButton = document.getElementById('toolbarReset');
            const visibleCountEl = document.getElementById('iconVisibleCount');
            const iconGrid = document.querySelector('.icon-grid-six');
            const iconItems = document.querySelectorAll('.inner-icon-item');

            function buildSnippet(iconClass) {
                const size = sizeInput ? sizeInput.value : 24;
                const color = colorInput ? colorInput.value : '#000000';
                return `<i class="${iconClass}" style="font-size: ${size}px; color: ${color};"></i>`;
            }

            function setSnippet(iconClass) {
                selectedIconClass = iconClass;
                selectedSnippet = buildSnippet(iconClass);

                if (snippetPreview) {
                    snippetPreview.innerHTML = `<i class="${iconClass}"></i>`;
                }

                if (snippetCode) {
                    snippetCode.textContent = selectedSnippet;
                    snippetCode.classList.remove('snippet-placeholder');
                }

                if (snippetIconName) {
                    snippetIconName.textContent = iconClass;
                    snippetIconName.classList.remove('snippet-placeholder');
                }

                if (copySnippetBtn) {
                    copySnippetBtn.disabled = false;
                }
            }

            function clearSnippetSelection() {
                selectedIconClass = '';
                selectedSnippet = '';

                document.querySelectorAll('.inner-icon-item.is-selected').forEach(activeItem => {
                    activeItem.classList.remove('is-selected');
                    const activeBadge = activeItem.querySelector('.copied-badge');
                    if (activeBadge) activeBadge.remove();
                });

                if (snippetPreview) {
                    snippetPreview.innerHTML = '';
                }

                if (snippetCode) {
                    snippetCode.textContent = 'Belum ada snippet';
                    snippetCode.classList.add('snippet-placeholder');
                }

                if (snippetIconName) {
                    snippetIconName.textContent = 'Belum dipilih';
                    snippetIconName.classList.add('snippet-placeholder');
                }

                if (copySnippetBtn) {
                    copySnippetBtn.disabled = true;
                    copySnippetBtn.innerHTML = '<i class="ti ti-copy me-1"></i>Copy Snippet';
                }
            }

            document.addEventListener('click', function(e) {
                const item = e.target.closest('.inner-icon-item');
                if (!item) return;

                const span = item.querySelector('span[data-icon]');
                if (span) {
                    document.querySelectorAll('.inner-icon-item.is-selected').forEach(activeItem => {
                        activeItem.classList.remove('is-selected');
                        const activeBadge = activeItem.querySelector('.copied-badge');
                        if (activeBadge) activeBadge.remove();
                    });

                    item.classList.add('is-selected');
                    const badge = document.createElement('span');
                    badge.className = 'badge bg-success-subtle text-success border copied-badge';
                    badge.textContent = 'Copied';
                    item.appendChild(badge);

                    const iconClass = span.getAttribute('data-icon');
                    setSnippet(iconClass);
                    if (cardHeaderAnchor) {
                        cardHeaderAnchor.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });

            if (copySnippetBtn) {
                copySnippetBtn.addEventListener('click', function() {
                    if (!selectedSnippet) return;

                    copyToClipboard(selectedSnippet).then(() => {
                        this.innerHTML = '<i class="ti ti-check me-1"></i>Copied';
                        setTimeout(() => {
                            this.innerHTML = '<i class="ti ti-copy me-1"></i>Copy Snippet';
                        }, 1200);
                    }).catch(err => {
                        console.error('Failed to copy: ', err);
                    });
                });
            }

            if (clearSelectionBtn) {
                clearSelectionBtn.addEventListener('click', function() {
                    clearSnippetSelection();
                });
            }

            function updateVisibleCount() {
                if (!visibleCountEl) return;
                const visible = Array.from(iconItems).filter(item => item.style.display !== 'none').length;
                visibleCountEl.textContent = `Showing ${visible} icons`;
            }

            function applySize(value) {
                if (!iconGrid) return;
                iconGrid.style.setProperty('--tabler-icon-size', `${value}px`);
                if (selectedIconClass) {
                    setSnippet(selectedIconClass);
                }
            }

            function applyColor(value) {
                if (!iconGrid) return;
                iconGrid.style.setProperty('--tabler-icon-color', value);
                if (snippetPreview) {
                    snippetPreview.style.color = value;
                }
                if (colorValue) colorValue.textContent = value.toUpperCase();
                if (selectedIconClass) {
                    setSnippet(selectedIconClass);
                }
            }

            function applyFilters() {
                const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
                const words = query.split(/\s+/).filter(w => w.length > 0);

                iconItems.forEach(item => {
                    const iconSpan = item.querySelector('span[data-icon]');
                    const nameSpan = item.querySelector('.fw-semibold');

                    let searchableText = '';
                    if (iconSpan) {
                        const dataIcon = iconSpan.getAttribute('data-icon');
                        searchableText += dataIcon + ' ' + dataIcon.replace(/-/g, ' ') + ' ';
                    }
                    if (nameSpan) {
                        searchableText += nameSpan.textContent;
                    }

                    searchableText = searchableText.toLowerCase();
                    const matches = words.every(word => searchableText.includes(word));
                    item.style.display = (words.length === 0 || matches) ? '' : 'none';
                });

                document.querySelectorAll('.grid-header').forEach(header => {
                    let next = header.nextElementSibling;
                    let visibleIcons = false;

                    while (next && !next.classList.contains('grid-header')) {
                        if (next.classList.contains('inner-icon-item') && next.style.display !== 'none') {
                            visibleIcons = true;
                            break;
                        }
                        next = next.nextElementSibling;
                    }

                    header.style.display = (words.length === 0 || visibleIcons) ? '' : 'none';
                });

                updateVisibleCount();
            }

            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    applyFilters();
                });
            }

            if (sizeInput) {
                sizeInput.addEventListener('change', function() {
                    applySize(this.value);
                });
            }

            if (colorInput) {
                colorInput.addEventListener('input', function() {
                    applyColor(this.value);
                });
            }

            if (resetButton) {
                resetButton.addEventListener('click', function() {
                    if (searchInput) searchInput.value = '';
                    if (sizeInput) sizeInput.value = '24';
                    if (colorInput) colorInput.value = '#000000';

                    applySize(24);
                    applyColor('#000000');
                    applyFilters();
                });
            }

            applySize(sizeInput ? sizeInput.value : 24);
            applyColor(colorInput ? colorInput.value : '#000000');
            applyFilters();
        });
    </script>
@endsection
