@extends('user.index')
@section('content')
    <style>
        .top-0 {
            padding: 200px 0px 0px 0px !important;
        }
    </style>
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
                                                <h1 class="elementor-heading-title elementor-size-default">FAQ</h1>
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
                                                        <span class="elementor-icon-list-text">FAQ</span>
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
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-433a41f1"
                    data-id="433a41f1" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">


                        <div class="elementor-element elementor-element-9fa3d73 elementor-widget elementor-widget-jkit_accordion"
                            data-id="9fa3d73" data-element_type="widget" data-widget_type="jkit_accordion.default">
                            <div class="elementor-widget-container">
                                <div class="jeg-elementor-kit jkit-accordion style-default jeg_module_1252_3_66699f3a2c1ce">
                                    @forelse ($questions as $index=> $question)
                                        <div class="card-wrapper">
                                            <div class="panel-group" id="accordionFourLeft">
                                                <div class="panel panel-default">
                                                    <div class="card-header">

                                                        <a data-toggle="collapse" data-parent="#accordion_oneLeft"
                                                            href="#collapseFiveLeftone{{ $question->id }}" aria-expanded="false"
                                                            class="collapsed card-header-button">
                                                            <span class="title">{{ $question->question }}</span>
                                                            <div class="right-icon-group">
                                                                <div class="normal-icon"><i aria-hidden="true"
                                                                        class="jki jki-plus-line"></i></div>
                                                                <div class="active-icon"><i aria-hidden="true"
                                                                        class="jki jki-minus-line"></i></div>
                                                            </div>
                                                        </a>

                                                    </div>
                                                    <div id="collapseFiveLeftone{{ $question->id }}" class="panel-collapse collapse  @if($index === 0) show @endif"
                                                        aria-expanded="false" role="tablist">
                                                        <div class="card-expand">
                                                            <div class="card-body">
                                                                @forelse ($question->answers as $answer)
                                                                <p> {{ $answer->answer }}</p>
                                                                    @empty
                                                                    <p>No answers found</p>
                                                                  
                                                                @endforelse
                                                            </div>
                                                        </div>
                                                        <!-- end of panel-body -->
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end of /.panel-group-->
                                        </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5ed5fc92"
                    data-id="5ed5fc92" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2aaf3ec5 elementor-widget elementor-widget-image"
                            data-id="2aaf3ec5" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="800" height="962"
                                    src="/users/wp-content/uploads/sites/303/2022/07/faq-AUCVSV9-852x1024.png"
                                    class="attachment-large size-large wp-image-1255" alt
                                    srcset="https://templatekit.jegtheme.com/madesign/wp-content/uploads/sites/303/2022/07/faq-AUCVSV9-852x1024.png 852w, https://templatekit.jegtheme.com/madesign/wp-content/uploads/sites/303/2022/07/faq-AUCVSV9-250x300.png 250w, https://templatekit.jegtheme.com/madesign/wp-content/uploads/sites/303/2022/07/faq-AUCVSV9-768x923.png 768w, https://templatekit.jegtheme.com/madesign/wp-content/uploads/sites/303/2022/07/faq-AUCVSV9-800x962.png 800w, https://templatekit.jegtheme.com/madesign/wp-content/uploads/sites/303/2022/07/faq-AUCVSV9.png 1000w"
                                    sizes="(max-width: 800px) 100vw, 800px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-4bb999b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="4bb999b" data-element_type="section">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d5d66c"
                    data-id="3d5d66c" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-8fd0b7f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="8fd0b7f" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e3909aa"
                                    data-id="e3909aa" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-f0d7fb3 elementor-widget elementor-widget-jkit_animated_text"
                                            data-id="f0d7fb3" data-element_type="widget"
                                            data-widget_type="jkit_animated_text.default">
                                            <div class="elementor-widget-container">
                                                <div class="jeg-elementor-kit jkit-animated-text jeg_module_1252_4_66699f3a3213b"
                                                    data-style="none">
                                                    <p class="animated-text"><span class="normal-text style-gradient">Give
                                                            Your
                                                            Feedback</span><span
                                                            class="dynamic-wrapper style-gradient"><span
                                                                class="dynamic-text"></span></span><span
                                                            class="normal-text style-gradient"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7681e4c elementor-widget elementor-widget-heading"
                                            data-id="7681e4c" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Let's
                                                    Write About 3D Design ?</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-72267de elementor-widget elementor-widget-text-editor"
                                            data-id="72267de" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua
                                                    veniam.</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f9d7db2 elementor-widget__width-auto e-transform elementor-widget elementor-widget-button"
                                            data-id="f9d7db2" data-element_type="widget"
                                            data-settings="{&quot;_transform_scale_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.9,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_scale_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="#">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Get In Touch</span>
                                                        </span>
                                                    </a>
                                                </div>
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
            class="elementor-section elementor-top-section elementor-element elementor-element-c8ffeed elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="c8ffeed" data-element_type="section">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6b823bf"
                    data-id="6b823bf" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-9c8fb07 elementor-widget elementor-widget-jkit_animated_text"
                            data-id="9c8fb07" data-element_type="widget" data-widget_type="jkit_animated_text.default">
                            <div class="elementor-widget-container">
                                <div class="jeg-elementor-kit jkit-animated-text jeg_module_1252_5_66699f3a390e6"
                                    data-style="none">
                                    <p class="animated-text"><span class="normal-text style-gradient">Our Blog</span><span
                                            class="dynamic-wrapper style-gradient"><span
                                                class="dynamic-text"></span></span><span
                                            class="normal-text style-gradient"></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-06e037e elementor-widget elementor-widget-heading"
                            data-id="06e037e" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default pb-5">Blog và Bài viết</h2>
                            </div>
                        </div>
                       
                        <div class="elementor-element elementor-element-81251dc elementor-widget elementor-widget-jkit_post_block"
                            data-id="81251dc" data-element_type="widget" data-widget_type="jkit_post_block.default">
                            <div class="elementor-widget-container">
                                <div class="jeg-elementor-kit jkit-postblock postblock-type-3 jkit-pagination-disable post-element jeg_module_1252_6_66699f3a433de"
                                    data-id="jeg_module_1252_6_66699f3a433de"
                                    data-settings="{&quot;post_type&quot;:&quot;post&quot;,&quot;number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;post_offset&quot;:0,&quot;unique_content&quot;:&quot;disable&quot;,&quot;include_post&quot;:&quot;&quot;,&quot;exclude_post&quot;:&quot;&quot;,&quot;include_category&quot;:&quot;&quot;,&quot;exclude_category&quot;:&quot;&quot;,&quot;include_author&quot;:&quot;&quot;,&quot;include_tag&quot;:&quot;&quot;,&quot;exclude_tag&quot;:&quot;&quot;,&quot;sort_by&quot;:&quot;latest&quot;,&quot;pagination_mode&quot;:&quot;disable&quot;,&quot;pagination_loadmore_text&quot;:&quot;Load More&quot;,&quot;pagination_loading_text&quot;:&quot;Loading...&quot;,&quot;pagination_number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;pagination_scroll_limit&quot;:0,&quot;pagination_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;pagination_icon_position&quot;:&quot;before&quot;,&quot;st_category_position&quot;:&quot;left&quot;,&quot;sg_content_postblock_type&quot;:&quot;type-3&quot;,&quot;sg_content_element_order&quot;:&quot;title,meta,excerpt,read&quot;,&quot;sg_content_breakpoint&quot;:&quot;tablet&quot;,&quot;sg_content_title_html_tag&quot;:&quot;h4&quot;,&quot;sg_content_category_enable&quot;:&quot;yes&quot;,&quot;sg_content_excerpt_enable&quot;:&quot;yes&quot;,&quot;sg_content_excerpt_length&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:18,&quot;sizes&quot;:[]},&quot;sg_content_excerpt_more&quot;:&quot;...&quot;,&quot;sg_content_readmore_enable&quot;:&quot;yes&quot;,&quot;sg_content_readmore_icon&quot;:{&quot;value&quot;:&quot;fas fa-arrow-right&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_readmore_icon_position&quot;:&quot;after&quot;,&quot;sg_content_readmore_text&quot;:&quot;Read More&quot;,&quot;sg_content_comment_enable&quot;:&quot;&quot;,&quot;sg_content_comment_icon&quot;:{&quot;value&quot;:&quot;fas fa-comment&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_comment_icon_position&quot;:&quot;before&quot;,&quot;sg_content_meta_enable&quot;:&quot;&quot;,&quot;sg_content_meta_author_enable&quot;:&quot;&quot;,&quot;sg_content_meta_author_by_text&quot;:&quot;by&quot;,&quot;sg_content_meta_author_icon&quot;:{&quot;value&quot;:&quot;fas fa-user&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_author_icon_position&quot;:&quot;before&quot;,&quot;sg_content_meta_date_enable&quot;:&quot;&quot;,&quot;sg_content_meta_date_type&quot;:&quot;published&quot;,&quot;sg_content_meta_date_format&quot;:&quot;default&quot;,&quot;sg_content_meta_date_format_custom&quot;:&quot;F j, Y&quot;,&quot;sg_content_meta_date_icon&quot;:{&quot;value&quot;:&quot;fas fa-clock&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_date_icon_position&quot;:&quot;before&quot;,&quot;sg_content_image_size_imagesize_size&quot;:&quot;full&quot;,&quot;paged&quot;:1,&quot;class&quot;:&quot;jkit_post_block&quot;}">
                                    <div class="jkit-block-container">
                                        <div class="jkit-posts jkit-ajax-flag">
                                            @foreach ($news->take(3) as $new)
                                                <article
                                                    class="jkit-post post-743 post type-post status-publish format-standard has-post-thumbnail hentry category-project tag-project">
                                                    <div class="jkit-thumb"><a
                                                            href="{{ route('newsUser.detail', $new->id) }}">
                                                            <div class="thumbnail-container ">
                                                                <img decoding="async" width="1440" height="960"
                                                                    src="{{ asset('images/' . $new->images) }}"
                                                                    class="attachment-full size-full wp-post-image"
                                                                    alt="Architectural Technical Drawing" />
                                                            </div>
                                                        </a>
                                                        <div class="jkit-post-category position-left"><span><a
                                                                    href="{{ route('newsUser.detail', $new->id) }}"
                                                                    class="category-project">{{ $new->category }}</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="jkit-postblock-content">
                                                        <h4 class="jkit-post-title">
                                                            <a
                                                                href="{{ route('newsUser.detail', $new->id) }}">{{ $new->title }}</a>
                                                        </h4>
                                                        <div class="jkit-post-excerpt">
                                                            <p>{{ $new->description }}</p>
                                                        </div>
                                                        <div class="jkit-post-meta-bottom">
                                                            <div class="jkit-meta-readmore icon-position-after">
                                                                <a href="{{ route('newsUser.detail', $new->id) }}"
                                                                    class="jkit-readmore">Đọc thêm<i aria-hidden="true"
                                                                        class="fas fa-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
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
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script> --}}
@endsection
