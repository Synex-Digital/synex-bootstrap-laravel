<div class="card-2">
    <div class="card-body">
        <div class="position-relative">
            <img src="{{ $image }}" width="100%" style="border-radius: 1rem;" alt="Synex Digital">
            {{-- <a href="#" class="badge-default service-badge">{{ $status }}</a> --}}
        </div>
        <div class="pt-3">
            <div class="d-flex align-items-center justify-content-between">
                <p style="font-weight: 500">
                    <svg width="22px" height="22px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.6" d="M10.11 4C10.03 4.3 10 4.63 10 5V8H5V6C5 4.9 5.9 4 7 4H10.11Z"
                            fill="#292D32" />
                        <path
                            d="M10 19V8H5C3 8 2 9 2 11V19C2 21 3 22 5 22H13C11 22 10 21 10 19ZM6.75 17C6.75 17.41 6.41 17.75 6 17.75C5.59 17.75 5.25 17.41 5.25 17V13C5.25 12.59 5.59 12.25 6 12.25C6.41 12.25 6.75 12.59 6.75 13V17Z"
                            fill="#292D32" />
                        <path opacity="0.4"
                            d="M14 22H13C11 22 10 21 10 19V5C10 3 11 2 13 2H19C21 2 22 3 22 5V19C22 21 21 22 19 22H18"
                            fill="#3B82F6" />
                        <path d="M18 18V22H14V18C14 17.45 14.45 17 15 17H17C17.55 17 18 17.45 18 18Z" fill="#666B71" />
                        <path
                            d="M14 13.75C13.59 13.75 13.25 13.41 13.25 13V8C13.25 7.59 13.59 7.25 14 7.25C14.41 7.25 14.75 7.59 14.75 8V13C14.75 13.41 14.41 13.75 14 13.75Z"
                            fill="#292D32" />
                        <path
                            d="M18 13.75C17.59 13.75 17.25 13.41 17.25 13V8C17.25 7.59 17.59 7.25 18 7.25C18.41 7.25 18.75 7.59 18.75 8V13C18.75 13.41 18.41 13.75 18 13.75Z"
                            fill="#292D32" />
                    </svg>
                    {{ $name }}
                </p>
                <p style="font-size: 14px; font-weight: 500; color: #666B71">{{ $category }}</p>
            </div>
            <h3 class="card-title font-700 mb-0">{{ $title }}</h3>
            <p class="pt-2">{{ $description }}</p>
        </div>
    </div>
</div>
