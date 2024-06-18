@if (!empty($landingPage->title == 'block02') & ($landingPage->title == 'block02'))

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-29d4fd6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="29d4fd6" data-element_type="section" data-settings="{&quot;shape_divider_bottom&quot;:&quot;split&quot;}">
        <div class="elementor-background-overlay"></div>
        <section
            class="elementor-section elementor-inner-section elementor-element elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="290bcee" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-aed2f23"
                    data-id="aed2f23" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-17e5432 elementor-widget elementor-widget-heading"
                            data-id="17e5432" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    {{ $landingPage->block->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="elementor-shape elementor-shape-bottom" data-negative="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 20" preserveAspectRatio="none">
                <path class="elementor-shape-fill"
                    d="M0,0v3c0,0,393.8,0,483.4,0c9.2,0,16.6,7.4,16.6,16.6c0-9.1,7.4-16.6,16.6-16.6C606.2,3,1000,3,1000,3V0H0z" />
            </svg>
        </div>
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-092602c"
                data-id="092602c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-32f60e2 elementor-section-content-bottom elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="32f60e2" data-element_type="section">
                        <div class=" row g-3">
                            @if (!empty($landingPage->block->json))
                                @foreach ($landingPage->block->json as $item)
                                    <div class="col-lg-4" data-id="0a8ba76" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-927e1c0 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                data-id="927e1c0" data-element_type="widget"
                                                data-widget_type="jkit_icon_box.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_125_5_66699f103c0bb">
                                                        <div class="jkit-icon-box-wrapper hover-from-left">
                                                            <div
                                                                class="icon-box icon-box-header elementor-animation-float">
                                                                <div class="icon style-color"><img decoding="async"
                                                                        src="{{ $item['image'] ? asset($item['image']) : '' }}"
                                                                        alt="{{ $item['key'] ? $item['key'] : '' }}">
                                                                </div>
                                                            </div>
                                                            <div class="icon-box icon-box-body">
                                                                <h3 class="title">
                                                                    {{ $item['key'] ? $item['key'] : '' }}
                                                                </h3>
                                                                <p class="icon-box-description">
                                                                    {{ $item['value'] ? $item['value'] : '' }}</p>
                                                                <div class="icon-box-button ">
                                                                    <div class="btn-wrapper icon-position-after">
                                                                        @if (!empty($item['link']))
                                                                            <a href="{{ $item['link'] }}"
                                                                                class="icon-box-link">Read More<i
                                                                                    aria-hidden="true"
                                                                                    class="fas fa-arrow-right"></i></a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif




                        </div>
                    </section>



                </div>
            </div>
        </div>
    </section>
@endif
