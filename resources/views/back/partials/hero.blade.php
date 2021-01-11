@isset($title)
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    {{ $title }} <small
                        class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">{{ $sub ?? '' }}</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            {{ $parent ?? '' }}
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href=" ">{{ $child ?? $title }}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endisset
