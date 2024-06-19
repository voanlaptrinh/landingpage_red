@if (!empty($landingPage->title == 'block06') & ($landingPage->title == 'block06'))
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-b7e2b56 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="b7e2b56" data-element_type="section">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ffdde5"
                data-id="8ffdde5" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-2bb4eb1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="2bb4eb1" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            @if (!empty($landingPage->block->json))
                                @foreach ($landingPage->block->json as $index => $item)
                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-078fb14"
                                        data-id="078fb14" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-fe713fa elementor-widget elementor-widget-jkit_fun_fact"
                                                data-id="fe713fa" data-element_type="widget"
                                                data-widget_type="jkit_fun_fact.default">
                                                <div class="elementor-widget-container">
                                                    <div
                                                        class="jeg-elementor-kit jkit-fun-fact align-center hover-from-left elementor-animation- jeg_module_125_24_66699f10e7243">
                                                        <div class=fun-fact-inner>
                                                            <div class="content">
                                                                <div class="number-wrapper"><span class="prefix"></span>
                                                                    <span class="number" data-value="{{$item['number']}}"
                                                                        data-animation-duration="3500">0</span>
                                                                    <span class="suffix"></span><sup
                                                                        class="super">{{$item['key']}}</sup>
                                                                </div>
                                                                <h5 class="title">{{$item['value']}}</h5>
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
