@if (!empty($landingPage->title == 'block03') & ($landingPage->title == 'block03'))
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-4465218 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4465218" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-86587b5"
                data-id="86587b5" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-39646a1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="39646a1" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c891d5c"
                                data-id="c891d5c" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7b8b4e5 elementor-widget elementor-widget-jkit_animated_text"
                                        data-id="7b8b4e5" data-element_type="widget"
                                        data-widget_type="jkit_animated_text.default">
                                        <div class="elementor-widget-container">
                                            <div class="jeg-elementor-kit jkit-animated-text jeg_module_125_13_66699f108af87"
                                                data-style="none">
                                                <p class="animated-text"><span
                                                        class="normal-text style-gradient">{{ $landingPage->block->title }}</span><span
                                                        class="dynamic-wrapper style-gradient"><span
                                                            class="dynamic-text"></span></span><span
                                                        class="normal-text style-gradient"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d9868fd elementor-widget elementor-widget-heading"
                                        data-id="d9868fd" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">
                                                {{ $landingPage->block->title1 }}</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-06ee0fc elementor-widget elementor-widget-text-editor"
                                        data-id="06ee0fc" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>{{ $landingPage->block->description }}</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-72e4ca3 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-hidden-mobile elementor-widget elementor-widget-image"
                                        data-id="72e4ca3" data-element_type="widget"
                                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="800" height="800"
                                                src="{{ asset($landingPage->block->images) }}"
                                                class="attachment-full size-full wp-image-589" alt="" />
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0a1baff elementor-widget__width-auto elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="0a1baff" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
    
                                            <ul class="elementor-icon-list-items" style="list-style-type: none;">
                                                @if (!empty($landingPage->block->json))
                                                @foreach ($landingPage->block->json as $item)
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                    <span class="elementor-icon-list-text">{{ $item['key'] ? $item['key'] : '' }}</span>
                                                </li>
                                                @endforeach
                                                @endif
                                               
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-359f525"
                                data-id="359f525" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    @if (!empty($landingPage->block->json1))
                                    @foreach ($landingPage->block->json1 as $item)
                                    <div class="elementor-element elementor-element-64568e5 elementor-widget__width-initial elementor-widget-mobile__width-auto elementor-widget elementor-widget-jkit_pie_chart"
                                        data-id="64568e5" data-element_type="widget"
                                        data-widget_type="jkit_pie_chart.default">
                                        <div class="elementor-widget-container">
                                            <div class="jeg-elementor-kit jkit-pie-chart style-static  jeg_module_125_14_66699f1093fac"
                                                data-cutout="95" data-percent="{{$item['key']}}" data-color-type="gradient"
                                                data-color="" data-bg-color="#313648" data-gradient1="#AC01FF"
                                                data-gradient2="#1DCFFC" data-animation-duration="3600"
                                                data-content-type="percentage">
                                                <div class="pie-chart-wrapper">
                                                    <span class="pie-chart-content">0%</span>
                                                    <canvas class="main-canvas" height="130"
                                                        width="130"></canvas>
                                                    <canvas class="background-canvas" height="130"
                                                        width="130"></canvas>
                                                </div>
                                                <h2 class="pie-chart-title">{{$item['value']}}</h2>
                                                <div class="pie-chart-description">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endif




