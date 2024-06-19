@if (!empty($landingPage->title == 'block07') & ($landingPage->title == 'block07'))
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-7c62d1c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="7c62d1c" data-element_type="section">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7711769"
                data-id="7711769" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-786688f elementor-widget elementor-widget-jkit_animated_text"
                        data-id="786688f" data-element_type="widget" data-widget_type="jkit_animated_text.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-animated-text jeg_module_125_29_66699f10f030b"
                                data-style="none">
                                <p class="animated-text"><span
                                        class="normal-text style-gradient">{{ $landingPage->block->title }}</span><span
                                        class="dynamic-wrapper style-gradient"><span
                                            class="dynamic-text"></span></span><span
                                        class="normal-text style-gradient"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-b3a1111 elementor-widget elementor-widget-heading"
                        data-id="b3a1111" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">{{ $landingPage->block->title1 }}</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-48736ab elementor-widget elementor-widget-text-editor"
                        data-id="48736ab" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>{{ $landingPage->block->description }}</p>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7067443 elementor-widget__width-auto e-transform elementor-widget elementor-widget-button"
                        data-id="7067443" data-element_type="widget"
                        data-settings="{&quot;_transform_scale_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.9,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                @if (!empty( $landingPage->block->link))
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="{{ $landingPage->block->link }}">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Read More</span>
                                    </span>
                                </a>
                                @endif
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-61c86bc"
                data-id="61c86bc" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5521160 elementor-widget elementor-widget-jkit_testimonials"
                        data-id="5521160" data-element_type="widget" data-widget_type="jkit_testimonials.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-testimonials arrow-bottom-middle style-2  jeg_module_125_30_66699f1104f7b"
                                data-id="jeg_module_125_30_66699f1104f7b3"
                                data-settings="{&quot;autoplay&quot;:false,&quot;autoplay_speed&quot;:3500,&quot;autoplay_hover_pause&quot;:false,&quot;show_navigation&quot;:false,&quot;navigation_left&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-left\&quot;&gt;&lt;\/i&gt;&quot;,&quot;navigation_right&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-right\&quot;&gt;&lt;\/i&gt;&quot;,&quot;show_dots&quot;:false,&quot;arrow_position&quot;:&quot;bottom&quot;,&quot;responsive&quot;:{&quot;desktop&quot;:{&quot;items&quot;:2,&quot;margin&quot;:10,&quot;breakpoint&quot;:1025},&quot;tablet&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:768},&quot;mobile&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:0}}}">
                                <div class="testimonials-list">
                                    <div class="testimonials-track">
                                        @if (!empty($landingPage->block->json))
                                            @foreach ($landingPage->block->json as $index => $item)
                                                <div class="testimonial-item  elementor-repeater-item-d264bea">
                                                    <div class="testimonial-box hover-from-left">
                                                        <div class="comment-content">
                                                            <p>{{$item['value']}}</p>
                                                        </div>
                                                        <div class="comment-header">
                                                           
                                                        </div>
                                                        <div class="comment-bio">
                                                            <div class="bio-details">
                                                                <div class="profile-image"><img decoding="async"
                                                                        src="{{ asset($item['image']) }}"
                                                                        alt="{{$item['key']}}"></div>
                                                                <span class="profile-info">
                                                                    <strong class="profile-name">{{$item['key']}}</strong>
                                                                   
                                                                </span>
                                                            </div>
                                                            <div class="icon-content"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
