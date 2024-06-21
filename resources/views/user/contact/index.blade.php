@extends('user.index')
@section('content')
<div data-elementor-type="wp-page" data-elementor-id="1270" class="elementor elementor-1270">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-b42a4ee elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="b42a4ee" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e57335d"
                data-id="e57335d" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-d608530 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="d608530" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-93cb334"
                                data-id="93cb334" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3e1c0af elementor-widget elementor-widget-heading"
                                        data-id="3e1c0af" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                          
                                            <h1 class="elementor-heading-title elementor-size-default">Liên hệ</h1>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c0d7bed elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="c0d7bed" data-element_type="widget" data-widget_type="icon-list.default">
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
                                                    <span class="elementor-icon-list-text">Contact</span>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-ec29fd8 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="ec29fd8" data-element_type="section" data-settings="{&quot;shape_divider_bottom&quot;:&quot;split&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-shape elementor-shape-bottom" data-negative="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 20" preserveAspectRatio="none">
                <path class="elementor-shape-fill"
                    d="M0,0v3c0,0,393.8,0,483.4,0c9.2,0,16.6,7.4,16.6,16.6c0-9.1,7.4-16.6,16.6-16.6C606.2,3,1000,3,1000,3V0H0z">
                </path>
            </svg>
        </div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1a78c2b7"
                data-id="1a78c2b7" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-99d484b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="99d484b" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9ca59c4"
                                data-id="9ca59c4" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-c82d8bf elementor-widget elementor-widget-metform"
                                        data-id="c82d8bf" data-element_type="widget" data-widget_type="metform.default">
                                        <div class="elementor-widget-container">
                                            <div id="mf-response-props-id-1285" data-previous-steps-style=""
                                                data-editswitchopen="" data-response_type="alert"
                                                data-erroricon="fas fa-exclamation-triangle" data-successicon="fas fa-check"
                                                data-messageposition="top" class="   mf-scroll-top-no">
                                                <div class="formpicker_warper formpicker_warper_editable"
                                                    data-metform-formpicker-key="1285">

                                                    <div class="elementor-widget-container">

                                                        <div id="metform-wrap-c82d8bf-1285" class="mf-form-wrapper"
                                                            data-form-id="1285">
                                                            <form class="metform-form-content" action="{{route('contact.store')}}" method="POST">
                                                                @csrf
                                                                <div class="metform-form-main-wrapper">
                                                                    <div data-elementor-type="wp-post"
                                                                        data-elementor-id="1285"
                                                                        class="elementor elementor-1285">
                                                                        <section
                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-572109df elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                            data-id="572109df"
                                                                            data-element_type="section">
                                                                            <div
                                                                                class="elementor-container elementor-column-gap-no">
                                                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4b2ffb18"
                                                                                    data-id="4b2ffb18"
                                                                                    data-element_type="column">
                                                                                    <div
                                                                                        class="elementor-widget-wrap elementor-element-populated">
                                                                                        <div class="elementor-element elementor-element-6be3190f elementor-widget elementor-widget-mf-text"
                                                                                            data-id="6be3190f">
                                                                                            <div
                                                                                                class="elementor-widget-container">
                                                                                                <div
                                                                                                    class="mf-input-wrapper">
                                                                                                    <input type="text"
                                                                                                        class="mf-input "
                                                                                                        id="mf-input-text-6be3190f"
                                                                                                        name="title" value="{{old('title')}}"
                                                                                                        placeholder="Tiêu đề"
                                                                                                        aria-invalid="false">
                                                                                                </div>
                                                                                                @error('title')
                                                                                                <span class="" role="alert">
                                                                                                    <label style="color: red" class="error" id="name_error" for="name">{{ $message }}</label>
                                                                                                </span>
                                                                                            @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-5a8cfd55 elementor-widget elementor-widget-mf-email"
                                                                                            data-id="5a8cfd55">
                                                                                            <div
                                                                                                class="elementor-widget-container">
                                                                                                <div
                                                                                                    class="mf-input-wrapper">
                                                                                                    <input type="email"
                                                                                                        class="mf-input "
                                                                                                        id="mf-input-email-5a8cfd55"
                                                                                                        name="email"
                                                                                                        placeholder="Email"
                                                                                                       value="{{old('email')}}">
                                                                                                </div>
                                                                                                @error('email')
                                                                                                <span class="" role="alert">
                                                                                                    <label style="color: red" class="error" id="name_error" for="name">{{ $message }}</label>
                                                                                                </span>
                                                                                            @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-5df5e7ea elementor-widget elementor-widget-mf-text"
                                                                                            data-id="5df5e7ea">
                                                                                            <div
                                                                                                class="elementor-widget-container">
                                                                                                <div
                                                                                                    class="mf-input-wrapper">
                                                                                                    <input type="number"
                                                                                                        class="mf-input "
                                                                                                        id="phone"
                                                                                                        name="phone" value="{{old('phone')}}"
                                                                                                        placeholder="Số điện thoại"
                                                                                                        aria-invalid="false">
                                                                                                </div>
                                                                                                @error('phone')
                                                                                                <span class="" role="alert">
                                                                                                    <label style="color: red" class="error" id="name_error" for="name">{{ $message }}</label>
                                                                                                </span>
                                                                                            @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-6240300f elementor-widget elementor-widget-mf-textarea"
                                                                                            data-id="6240300f">
                                                                                            <div
                                                                                                class="elementor-widget-container">
                                                                                                <div
                                                                                                    class="mf-input-wrapper">
                                                                                                    <textarea class="mf-input mf-textarea " id="mf-input-text-area-6240300f" name="content"
                                                                                                        placeholder="Nội dung" cols="30" rows="10" >{{old('content')}}</textarea>
                                                                                                </div>
                                                                                                @error('content')
                                                                                                <span class="" role="alert">
                                                                                                    <label style="color: red" class="error" id="name_error" for="name">{{ $message }}</label>
                                                                                                </span>
                                                                                            @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-5f32da55 mf-btn--justify mf-btn--tablet-justify mf-btn--mobile-justify elementor-widget elementor-widget-mf-button"
                                                                                            data-id="5f32da55"
                                                                                            data-element_type="widget"
                                                                                            data-widget_type="mf-button.default">
                                                                                            <div
                                                                                                class="elementor-widget-container">
                                                                                                <div class="mf-btn-wraper "
                                                                                                    data-mf-form-conditional-logic-requirement="">
                                                                                                    <button type="submit"
                                                                                                        class="metform-btn metform-submit-btn "
                                                                                                        id=""><span>Gửi nội dung
                                                                                                        </span></button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
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
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6b3090f8"
                data-id="6b3090f8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-525629b elementor-widget elementor-widget-jkit_animated_text"
                        data-id="525629b" data-element_type="widget" data-widget_type="jkit_animated_text.default">
                        <div class="elementor-widget-container">
                            <div class="jeg-elementor-kit jkit-animated-text jeg_module_1270_2_66699f41b867e"
                                data-style="none">
                                <p class="animated-text"><span class="normal-text style-gradient">Contact Us</span><span
                                        class="dynamic-wrapper style-gradient"><span
                                            class="dynamic-text"></span></span><span
                                        class="normal-text style-gradient"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-24eb2a71 elementor-widget elementor-widget-heading"
                        data-id="24eb2a71" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Contact Us</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3d21d64a elementor-widget elementor-widget-text-editor"
                        data-id="3d21d64a" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                           
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-80ab3ce elementor-widget__width-auto jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                        data-id="80ab3ce" data-element_type="widget" data-widget_type="jkit_icon_box.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1270_3_66699f41bd4a6">
                                <div class="jkit-icon-box-wrapper hover-from-left">
                                    <div class="icon-box icon-box-header elementor-animation-">
                                        <div class="icon style-color"><i aria-hidden="true"
                                                class="jki jki-map-light"></i></div>
                                    </div>
                                    <div class="icon-box icon-box-body">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-eb31d91 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                        data-id="eb31d91" data-element_type="widget" data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_1270_4_66699f41c06dd">
                                <div class="heading-section-title  display-inline-block">
                                    <h2 class="heading-title">Địa chỉ</h2>
                                </div>
                                <div class="heading-section-description">
                                    
                                    <p>{{$webConfig->address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-41db1312 elementor-widget elementor-widget-spacer"
                        data-id="41db1312" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                          
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-15c6ba8 elementor-widget__width-auto jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                        data-id="15c6ba8" data-element_type="widget" data-widget_type="jkit_icon_box.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1270_5_66699f41c305a">
                                <div class="jkit-icon-box-wrapper hover-from-left">
                                    <div class="icon-box icon-box-header elementor-animation-">
                                        <div class="icon style-color"><i aria-hidden="true"
                                                class="jki jki-message-square-line"></i></div>
                                    </div>
                                    <div class="icon-box icon-box-body">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3b46bd10 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                        data-id="3b46bd10" data-element_type="widget" data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_1270_6_66699f41c4343">
                                <div class="heading-section-title  display-inline-block">
                                    <h2 class="heading-title">Email</h2>
                                </div>
                                <div class="heading-section-description">{{$webConfig->email}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-15af392a elementor-widget elementor-widget-spacer"
                        data-id="15af392a" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7a4884e elementor-widget__width-auto jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                        data-id="7a4884e" data-element_type="widget" data-widget_type="jkit_icon_box.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1270_7_66699f41c5ce9">
                                <div class="jkit-icon-box-wrapper hover-from-left">
                                    <div class="icon-box icon-box-header elementor-animation-">
                                        <div class="icon style-color"><i aria-hidden="true"
                                                class="jki jki-phone-line"></i></div>
                                    </div>
                                    <div class="icon-box icon-box-body">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-12199f7c elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                        data-id="12199f7c" data-element_type="widget" data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_1270_8_66699f41c6cfb">
                                <div class="heading-section-title  display-inline-block">
                                    <h2 class="heading-title">Phone</h2>
                                </div>
                                <div class="heading-section-description">
                                    <p>{{$webConfig->phone}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-441b24e3 elementor-widget elementor-widget-spacer"
                        data-id="441b24e3" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-38406f1 elementor-widget__width-auto jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                        data-id="38406f1" data-element_type="widget" data-widget_type="jkit_icon_box.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-icon-box icon-position- elementor-animation- jeg_module_1270_9_66699f41c8655">
                                <div class="jkit-icon-box-wrapper hover-from-left">
                                    <div class="icon-box icon-box-header elementor-animation-">
                                        <div class="icon style-color"><i aria-hidden="true"
                                                class="jki jki-voicemail-line"></i></div>
                                    </div>
                                    <div class="icon-box icon-box-body">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-46296959 elementor-widget__width-auto elementor-widget elementor-widget-jkit_heading"
                        data-id="46296959" data-element_type="widget" data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_1270_10_66699f41ca3e4">
                                <div class="heading-section-title  display-inline-block">
                                    <h2 class="heading-title">Số điện thoại</h2>
                                </div>
                                <div class="heading-section-description">
                                    <p>{{$webConfig->phone}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
