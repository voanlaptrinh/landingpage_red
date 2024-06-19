@extends('user.index')
@section('content')

<div data-elementor-type="wp-post" data-elementor-id="744" class="elementor elementor-744">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-4ea6801b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4ea6801b" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6758c91b"
                data-id="6758c91b" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-601fc0f4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="601fc0f4" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-28791b65"
                                data-id="28791b65" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-170fed21 elementor-widget elementor-widget-jkit_post_title"
                                        data-id="170fed21" data-element_type="widget"
                                        data-widget_type="jkit_post_title.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-post-title jeg_module_744_2_66699f5b10f31">
                                                <h2 class="post-title style-color ">{{$newsItem->title}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7dfa2c4c elementor-widget__width-auto elementor-widget elementor-widget-jkit_post_author"
                                        data-id="7dfa2c4c" data-element_type="widget"
                                        data-widget_type="jkit_post_author.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-post-author jeg_module_744_3_66699f5b11fa3">
                                                <p class="post-author ">{{$newsItem->category}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-643a769 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon"
                                        data-id="643a769" data-element_type="widget"
                                        data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <i aria-hidden="true" class="fas fa-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2acba4a8 elementor-widget__width-auto elementor-widget elementor-widget-jkit_post_date"
                                        data-id="2acba4a8" data-element_type="widget"
                                        data-widget_type="jkit_post_date.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="jeg-elementor-kit jkit-post-date jeg_module_744_4_66699f5b13887">
                                                <p class="post-date ">{{$newsItem->created_at}}</p>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-4d685d elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4d685d" data-element_type="section"
        data-settings="{&quot;shape_divider_bottom&quot;:&quot;split&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-shape elementor-shape-bottom" data-negative="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 20" preserveAspectRatio="none">
                <path class="elementor-shape-fill"
                    d="M0,0v3c0,0,393.8,0,483.4,0c9.2,0,16.6,7.4,16.6,16.6c0-9.1,7.4-16.6,16.6-16.6C606.2,3,1000,3,1000,3V0H0z" />
            </svg>
        </div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-26828a9f"
                data-id="26828a9f" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-7c58b30 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="7c58b30" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-acb13cd"
                                data-id="acb13cd" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2ac09e7 elementor-widget elementor-widget-heading"
                                        data-id="2ac09e7" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                       
                                            <h2 class="elementor-heading-title elementor-size-default">Tin tức mới</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6880bb79 elementor-widget elementor-widget-jkit_post_list"
                                        data-id="6880bb79" data-element_type="widget"
                                        data-widget_type="jkit_post_list.default">
                                        <div class="elementor-widget-container">
                                            <div class="jeg-elementor-kit jkit-postlist layout-vertical post-element jkit-pagination-disable jeg_module_744_5_66699f5b1d39a"
                                                data-id="jeg_module_744_5_66699f5b1d39a"
                                                data-settings="{&quot;post_type&quot;:&quot;post&quot;,&quot;number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;post_offset&quot;:1,&quot;unique_content&quot;:&quot;disable&quot;,&quot;include_post&quot;:&quot;&quot;,&quot;exclude_post&quot;:&quot;&quot;,&quot;include_category&quot;:&quot;&quot;,&quot;exclude_category&quot;:&quot;&quot;,&quot;include_author&quot;:&quot;&quot;,&quot;include_tag&quot;:&quot;&quot;,&quot;exclude_tag&quot;:&quot;&quot;,&quot;sort_by&quot;:&quot;latest&quot;,&quot;pagination_mode&quot;:&quot;disable&quot;,&quot;pagination_loadmore_text&quot;:&quot;Load More&quot;,&quot;pagination_loading_text&quot;:&quot;Loading...&quot;,&quot;pagination_number_post&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;pagination_scroll_limit&quot;:0,&quot;pagination_icon&quot;:{&quot;value&quot;:&quot;&quot;,&quot;library&quot;:&quot;&quot;},&quot;pagination_icon_position&quot;:&quot;before&quot;,&quot;sg_content_layout&quot;:&quot;vertical&quot;,&quot;sg_content_image_enable&quot;:&quot;yes&quot;,&quot;sg_content_background_image_enable&quot;:0,&quot;sg_content_icon_enable&quot;:&quot;&quot;,&quot;sg_content_icon&quot;:{&quot;value&quot;:&quot;fas fa-circle&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_enable&quot;:&quot;yes&quot;,&quot;sg_content_meta_date_enable&quot;:&quot;yes&quot;,&quot;sg_content_meta_date_type&quot;:&quot;published&quot;,&quot;sg_content_meta_date_format&quot;:&quot;default&quot;,&quot;sg_content_meta_date_format_custom&quot;:&quot;F j, Y&quot;,&quot;sg_content_meta_date_icon&quot;:{&quot;value&quot;:&quot;jki jki-calendar-page-empty-light&quot;,&quot;library&quot;:&quot;jkiticon&quot;},&quot;sg_content_meta_category_enable&quot;:&quot;&quot;,&quot;sg_content_meta_category_icon&quot;:{&quot;value&quot;:&quot;fas fa-tag&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;sg_content_meta_position&quot;:&quot;bottom&quot;,&quot;sg_content_image_size_imagesize_size&quot;:&quot;large&quot;,&quot;paged&quot;:1,&quot;class&quot;:&quot;jkit_post_list&quot;}">
                                                <div class="jkit-block-container">
                                                    <div class="jkit-posts jkit-ajax-flag">
                                                        @foreach ($news->take(3) as $itemNew)
                                                        <article class="jkit-post post-list-item">
                                                            <a href="{{ route('newsUser.detail', $itemNew->id) }}">
                                                                <img decoding="async" width="800" height="534"
                                                                    src="{{ asset('images/' . $itemNew->images) }}"
                                                                    class="attachment-large size-large wp-post-image"
                                                                    alt="3d artist using blueprint with graphics tablet and computers while working on project of 3d design"
                                                                    sizes="(max-width: 800px) 100vw, 800px" />
                                                                <div class="jkit-postlist-content"><span
                                                                        class="jkit-postlist-title">{{$itemNew->title}}</span>
                                                                    <div class="meta-lists"><span
                                                                            class="meta-date"><i
                                                                                aria-hidden="true"
                                                                                class="jki jki-calendar-page-empty-light"></i>{{$itemNew->created_at}}</span> </div>
                                                                </div>
                                                            </a>
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
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-6081ae96 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="6081ae96" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-202eb6"
                                data-id="202eb6" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-18d1ee elementor-widget elementor-widget-heading"
                                        data-id="18d1ee" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">{{$webConfig->title}}</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6bd1a4c0 elementor-widget elementor-widget-text-editor"
                                        data-id="6bd1a4c0" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                           
                                            <p>{{$webConfig->description}}</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-10945efe elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="10945efe" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <link rel="stylesheet"
                                                href="/users/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">{{$webConfig->address}}</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">{{$webConfig->phone}}</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-envelope"></i>
                                                    </span>
                                                    <span
                                                        class="elementor-icon-list-text">{{$webConfig->email}}</span>
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
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4898c94d ps-3"
                data-id="4898c94d" data-element_type="column">
                <div class="elementor-widget-wrap" style="word-wrap: break-word;">
                  {!!$newsItem->content!!}
                  
                </div>
            </div>
        </div>
    </section>
</div>

@endsection