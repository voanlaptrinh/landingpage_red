@if (!empty($landingPage->title == 'block05') & ($landingPage->title == 'block05'))
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-48701b8 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="48701b8" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8486734"
                data-id="8486734" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-b46f0e4 elementor-widget elementor-widget-image"
                        data-id="b46f0e4" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="1000" height="1023"
                                src="{{ asset($landingPage->block->images) }}"
                                class="attachment-full size-full wp-image-656" alt=""
                                srcset="{{ asset($landingPage->block->images) }} 1000w, {{ asset($landingPage->block->images) }} 293w, {{ asset($landingPage->block->images) }} 768w, {{ asset($landingPage->block->images) }} 800w"
                                sizes="(max-width: 1000px) 100vw, 1000px" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b7590ce"
                data-id="b7590ce" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f03eb7a elementor-widget elementor-widget-jkit_animated_text"
                        data-id="f03eb7a" data-element_type="widget" data-widget_type="jkit_animated_text.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-animated-text jeg_module_125_22_66699f10df836"
                                data-style="none">
                                <p class="animated-text"><span
                                        class="normal-text style-gradient">{{ $landingPage->block->title }}</span><span
                                        class="dynamic-wrapper style-gradient"><span
                                            class="dynamic-text"></span></span><span
                                        class="normal-text style-gradient"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a8ed326 elementor-widget elementor-widget-heading"
                        data-id="a8ed326" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">{{ $landingPage->block->title1 }}
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-4ddaf99 elementor-widget elementor-widget-text-editor"
                        data-id="4ddaf99" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>{{ $landingPage->block->description }}</p>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-15f80be elementor-widget elementor-widget-jkit_feature_list"
                        data-id="15f80be" data-element_type="widget" data-widget_type="jkit_feature_list.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-feature-list icon-position-left icon-position-left icon-position-left jeg_module_125_23_66699f10e32b6">
                                <ul class="feature-list-items shape-circle shape-view-stacked connector-type-classic">
                                    @if (!empty($landingPage->block->json))
                                    @foreach ($landingPage->block->json as $index => $item)
                                    <li class="feature-list-item {{ $index === 0 ? 'elementor-repeater-item-f40cdd0' : '' }}">
                                                <span class="connector"></span>
                                                <div class="feature-list-icon-box">
                                                    <div class="feature-list-icon-inner">
                                                        <span class="feature-list-icon p-4">
                                                            <img src="{{ asset($item['image']) }}" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="feature-list-content-box">
                                                    <h3 class="feature-list-title">
                                                        {{ $item['key'] ? $item['key'] : '' }}</h3>
                                                    <p class="feature-list-content">
                                                        {{ $item['value'] ? $item['value'] : '' }}
                                                    </p>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
