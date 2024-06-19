@if (!empty($landingPage->title == 'block04') & ($landingPage->title == 'block04'))
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-7c1a197 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="7c62d1c" data-element_type="section">
        <div class="elementor-background-overlay"></div>

        <div class="elementor-element elementor-element-d54d17c elementor-widget elementor-widget-jkit_animated_text"
            data-id="d54d17c" data-element_type="widget" data-widget_type="jkit_animated_text.default">
            <div class="elementor-widget-container">
                <div class="jeg-elementor-kit jkit-animated-text jeg_module_125_18_66699f10aee69" data-style="none">
                    <p class="animated-text"><span class="normal-text style-gradient"> {{ $landingPage->block->title }}</span><span class="dynamic-wrapper style-gradient"><span
                                class="dynamic-text"></span></span><span class="normal-text style-gradient"></span></p>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-44fdf5b elementor-widget elementor-widget-heading"
            data-id="44fdf5b" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default"> {{ $landingPage->block->title1 }}</h2>
            </div>
        </div>
        <div class="elementor-element elementor-element-a5f7c26 elementor-widget elementor-widget-text-editor"
            data-id="a5f7c26" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
                <p> {{ $landingPage->block->description }}</p>
            </div>
        </div>
        <div class="elementor-container elementor-column-gap-default">

            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-48d30e5"
                data-id="61c86bc" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5521160 elementor-widget elementor-widget-jkit_testimonials"
                        data-id="5521160" data-element_type="widget" data-widget_type="jkit_testimonials.default">
                        <div class="elementor-widget-container">

                            <div class="jeg-elementor-kit jkit-testimonials arrow-bottom-middle style-2  jeg_module_125_30_66699f1104f7b"
                                data-id="jeg_module_125_30_66699f1104f7b"
                                data-settings="{&quot;autoplay&quot;:true,&quot;autoplay_speed&quot;:3000,&quot;autoplay_hover_pause&quot;:false,&quot;show_navigation&quot;:false,&quot;navigation_left&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-left\&quot;&gt;&lt;\/i&gt;&quot;,&quot;navigation_right&quot;:&quot;&lt;i aria-hidden=\&quot;true\&quot; class=\&quot;fas fa-angle-right\&quot;&gt;&lt;\/i&gt;&quot;,&quot;show_dots&quot;:false,&quot;arrow_position&quot;:&quot;bottom&quot;,&quot;responsive&quot;:{&quot;desktop&quot;:{&quot;items&quot;:3,&quot;margin&quot;:10,&quot;breakpoint&quot;:1025},&quot;tablet&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:768},&quot;mobile&quot;:{&quot;items&quot;:1,&quot;margin&quot;:10,&quot;breakpoint&quot;:0}}}">
                                <div class="testimonials-list">
                                    <div class="testimonials-track">
                                        @foreach ($subcriptions as $subcription)
                                            <div class="testimonial-item  elementor-repeater-item-d264bea">
                                                <div class="testimonial-box hover-from-left">
                                                    <div class="comment-content">
                                                        <p>{{ $subcription->description }}</p>
                                                    </div>
                                                    <div class="comment-header">
                                                        <ul class="rating-stars">

                                                        </ul>
                                                    </div>
                                                    <div class="comment-bio">
                                                        <div class="bio-details">
                                                            <div class="profile-image"><img decoding="async"
                                                                    src="{{ asset('images/' . $subcription->images) }}"
                                                                    alt="John Doe"></div>
                                                            <span class="profile-info">
                                                                <strong
                                                                    class="profile-name">{{ $subcription->title }}</strong>
                                                                <p class="profile-des">Giá: {{ $subcription->price }}
                                                                    VNĐ</p>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <div class="text-end"><p>Chi tiết</p></div>
                                                </div>
                                            </div>
                                        @endforeach

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
