@extends('user.index')
@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="1252" class="elementor elementor-1252">
        <section
            class="top-0  elementor-section elementor-top-section elementor-element elementor-element-86c2fe8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="86c2fe8" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-66781b7"
                    data-id="66781b7" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-d7c07e6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="d7c07e6" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c01866e"
                                    data-id="c01866e" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-810dfb2 elementor-widget elementor-widget-heading"
                                            data-id="810dfb2" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.17.0 - 08-11-2023 */
                                                    .elementor-heading-title {
                                                        padding: 0;
                                                        margin: 0;
                                                        line-height: 1
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                        color: inherit;
                                                        font-size: inherit;
                                                        line-height: inherit
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                        font-size: 15px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                        font-size: 19px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                        font-size: 29px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                        font-size: 39px
                                                    }

                                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                        font-size: 59px
                                                    }
                                                </style>
                                                <h1 class="elementor-heading-title elementor-size-default">Feedback</h1>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7fae687 elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="7fae687" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <link rel="stylesheet"
                                                    href="/users/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                                <ul class="elementor-icon-list-items elementor-inline-items">
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <span class="elementor-icon-list-text">Home</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-chevron-right"></i> </span>
                                                        <span class="elementor-icon-list-text">Feedback</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>


        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-241a7ee2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="241a7ee2" data-element_type="section"
            data-settings="{&quot;shape_divider_bottom&quot;:&quot;split&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 20" preserveAspectRatio="none">
                    <path class="elementor-shape-fill"
                        d="M0,0v3c0,0,393.8,0,483.4,0c9.2,0,16.6,7.4,16.6,16.6c0-9.1,7.4-16.6,16.6-16.6C606.2,3,1000,3,1000,3V0H0z" />
                </svg>
            </div>
            <div class="container elementor-column-gap-default">
                <div class="elementor-column  elementor-top-column elementor-element " data-id="433a41f1"
                    data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">


                        <div class="elementor-element elementor-element-9fa3d73 elementor-widget elementor-widget-jkit_accordion"
                            data-id="9fa3d73" data-element_type="widget" data-widget_type="jkit_accordion.default">
                            <div class="elementor-widget-container">
                                <form action="{{ route('feedback.store') }}" method="POST">
                                    @csrf
                                    <input class="mb-3" type="email" name="email" id="email"
                                        value="{{ old('email') }}" placeholder="Email">
                                    @error('email')
                                        <span class="" role="alert">
                                            <label style="color: red" class="error" id="name_error"
                                                for="name">{{ $message }}</label>
                                        </span>
                                    @enderror
                                    <textarea name="content" id="textarea" cols="5" rows="5">{{ old('content') }}</textarea>
                                    @error('content')
                                        <span class="" role="alert">
                                            <label style="color: red" class="error" id="name_error"
                                                for="name">{{ $message }}</label>
                                        </span>
                                    @enderror
                                    <div class="text-end">
                                        <span class="char-counter " id="charCounter">0/255</span>
                                    </div>
                                    <div class="text-end mt-2">
                                        <button type="submit">Submit</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-2 pb-5">
                <div class="container">
                    <div class="row">
                        @forelse ($feedbacks as $feedback)
                            <div class="col-lg-12 pt-5 ">
                                <div class="row">
                                    <div class="col-lg-2 z-1 d-flex justify-content-center">
                                        <img width="60" height="50" src="logofooter.png" alt="">
                                    </div>
                                    <div class="col-lg-10 z-1">
                                        <h6>{{$feedback->email}}</h6>
                                        <p style="word-wrap: break-word;">
                                           {{$feedback->content}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            No feedback to website...
                        @endforelse
                    </div>
                    <style>
                        .bg-white{
                            background: transparent !important;
                            border: none
                        }
                        .border{
                            border: none !important
                        }
                        .pagination nav .justify-between{
                            display: none;
                            justify-content: end;
                        }
                        .pagination nav ul{
                            --bs-pagination-bg:none !important;
                            --bs-pagination-border-color: none !important;
                        }
                        .pagination nav ul .disabled{
                            --bs-pagination-disabled-color:none !important;
                            --bs-pagination-border-color: none !important;
                            --bs-pagination-disabled-bg: none !important;
                        }
                        .active>.page-link, .page-link.active{
                            background-color: unset;
                            color: #ffffff;
                            font-weight: 900
                        }
                        
                    </style>

                    <div class="pagination" style="display: flex; justify-content: end">
                       
                            {{ $feedbacks->appends(request()->query())->links('pagination::bootstrap-4') }}
                       
                    </div>


                   
                </div>
            </div>
        </section>
    </div>
    <script>
        const textarea = document.getElementById('textarea');
        const charCounter = document.getElementById('charCounter');

        textarea.addEventListener('input', () => {
            const textLength = textarea.value.length;
            charCounter.textContent = `${textLength}/255`;
            if (textLength > 255) {
                textarea.value = textarea.value.slice(0, 255); // Trim excess characters
                charCounter.textContent = '255/255'; // Update counter to max limit
            }
        });
    </script>
@endsection
