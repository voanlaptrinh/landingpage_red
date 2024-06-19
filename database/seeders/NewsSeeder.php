<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            'title' => 'What Are The Most Notable Differences Between 2d Design & 3d Design?',
            'category' => 'Design',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...',
            'images' => '1718612555_images.jpg',
            'content' => '<div class="elementor-widget-wrap elementor-element-populated">
    <div class="elementor-element elementor-element-6a13b31e elementor-widget elementor-widget-heading"
        data-id="6a13b31e" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">Video Streaming Service For Learning 3D Design
            </h2>
        </div>
    </div>
    <div class="elementor-element elementor-element-33de3508 elementor-widget elementor-widget-text-editor"
        data-id="33de3508" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit.</p>
        </div>
    </div>
    <div class="elementor-element elementor-element-71833d1a elementor-widget elementor-widget-jkit_post_featured_image"
        data-id="71833d1a" data-element_type="widget" data-widget_type="jkit_post_featured_image.default">
        <div class="elementor-widget-container">
            <div class="jeg-elementor-kit jkit-post-featured-image jeg_module_744_7_66699f5b32ad6">
                <div class="post-featured-image "><img loading="lazy" decoding="async" width="1440" height="961"
                        src="/users/wp-content/uploads/sites/303/2022/07/3d-artist-using-blueprint-with-graphics-tablet-and-computers-while-working-on-project-of-3d-design-e1658281334651.jpg"
                        class="attachment-full size-full wp-post-image"
                        alt="3d artist using blueprint with graphics tablet and computers while working on project of 3d design">
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-3efe8b0d elementor-widget elementor-widget-text-editor"
        data-id="3efe8b0d" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;</p>
        </div>
    </div>
    <section
        class="elementor-section elementor-inner-section elementor-element elementor-element-4bf6e505 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4bf6e505" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-310f4a7f"
                data-id="310f4a7f" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5e36c106 elementor-widget elementor-widget-spacer"
                        data-id="5e36c106" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                          
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-72d4e943"
                data-id="72d4e943" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2eb37db3 elementor-widget elementor-widget-heading"
                        data-id="2eb37db3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">We Offer Everything About 3D
                                Design</h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-68b98ea6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="68b98ea6" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Trusted Platform</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Multi Purpose</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Document Manage</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Security Ensured</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Real Interactions</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">User Experience</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="elementor-element elementor-element-6360a02a elementor-widget elementor-widget-text-editor"
        data-id="6360a02a" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;&nbsp;</p>
        </div>
    </div>
  
</div>
',
        ]);
        DB::table('news')->insert([
            'title' => 'What Are The Most Notable Differences Between 2d Design & 3d Design?',
            'category' => 'Design',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...',
            'images' => '1718612555_images.jpg',
            'content' => '<div class="elementor-widget-wrap elementor-element-populated">
    <div class="elementor-element elementor-element-6a13b31e elementor-widget elementor-widget-heading"
        data-id="6a13b31e" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">Video Streaming Service For Learning 3D Design
            </h2>
        </div>
    </div>
    <div class="elementor-element elementor-element-33de3508 elementor-widget elementor-widget-text-editor"
        data-id="33de3508" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit.</p>
        </div>
    </div>
    <div class="elementor-element elementor-element-71833d1a elementor-widget elementor-widget-jkit_post_featured_image"
        data-id="71833d1a" data-element_type="widget" data-widget_type="jkit_post_featured_image.default">
        <div class="elementor-widget-container">
            <div class="jeg-elementor-kit jkit-post-featured-image jeg_module_744_7_66699f5b32ad6">
                <div class="post-featured-image "><img loading="lazy" decoding="async" width="1440" height="961"
                        src="/users/wp-content/uploads/sites/303/2022/07/3d-artist-using-blueprint-with-graphics-tablet-and-computers-while-working-on-project-of-3d-design-e1658281334651.jpg"
                        class="attachment-full size-full wp-post-image"
                        alt="3d artist using blueprint with graphics tablet and computers while working on project of 3d design">
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-3efe8b0d elementor-widget elementor-widget-text-editor"
        data-id="3efe8b0d" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;</p>
        </div>
    </div>
    <section
        class="elementor-section elementor-inner-section elementor-element elementor-element-4bf6e505 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4bf6e505" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-310f4a7f"
                data-id="310f4a7f" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5e36c106 elementor-widget elementor-widget-spacer"
                        data-id="5e36c106" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                          
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-72d4e943"
                data-id="72d4e943" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2eb37db3 elementor-widget elementor-widget-heading"
                        data-id="2eb37db3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">We Offer Everything About 3D
                                Design</h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-68b98ea6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="68b98ea6" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Trusted Platform</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Multi Purpose</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Document Manage</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Security Ensured</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Real Interactions</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">User Experience</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="elementor-element elementor-element-6360a02a elementor-widget elementor-widget-text-editor"
        data-id="6360a02a" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;&nbsp;</p>
        </div>
    </div>
  
</div>
',
        ]);
        DB::table('news')->insert([
            'title' => 'What Are The Most Notable Differences Between 2d Design & 3d Design?',
            'category' => 'Design',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...',
            'images' => '1718612555_images.jpg',
            'content' => '<div class="elementor-widget-wrap elementor-element-populated">
    <div class="elementor-element elementor-element-6a13b31e elementor-widget elementor-widget-heading"
        data-id="6a13b31e" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">Video Streaming Service For Learning 3D Design
            </h2>
        </div>
    </div>
    <div class="elementor-element elementor-element-33de3508 elementor-widget elementor-widget-text-editor"
        data-id="33de3508" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit.</p>
        </div>
    </div>
    <div class="elementor-element elementor-element-71833d1a elementor-widget elementor-widget-jkit_post_featured_image"
        data-id="71833d1a" data-element_type="widget" data-widget_type="jkit_post_featured_image.default">
        <div class="elementor-widget-container">
            <div class="jeg-elementor-kit jkit-post-featured-image jeg_module_744_7_66699f5b32ad6">
                <div class="post-featured-image "><img loading="lazy" decoding="async" width="1440" height="961"
                        src="/users/wp-content/uploads/sites/303/2022/07/3d-artist-using-blueprint-with-graphics-tablet-and-computers-while-working-on-project-of-3d-design-e1658281334651.jpg"
                        class="attachment-full size-full wp-post-image"
                        alt="3d artist using blueprint with graphics tablet and computers while working on project of 3d design">
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-3efe8b0d elementor-widget elementor-widget-text-editor"
        data-id="3efe8b0d" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;</p>
        </div>
    </div>
    <section
        class="elementor-section elementor-inner-section elementor-element elementor-element-4bf6e505 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4bf6e505" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-310f4a7f"
                data-id="310f4a7f" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5e36c106 elementor-widget elementor-widget-spacer"
                        data-id="5e36c106" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                          
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-72d4e943"
                data-id="72d4e943" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2eb37db3 elementor-widget elementor-widget-heading"
                        data-id="2eb37db3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">We Offer Everything About 3D
                                Design</h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-68b98ea6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="68b98ea6" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Trusted Platform</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Multi Purpose</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Document Manage</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Security Ensured</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Real Interactions</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">User Experience</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="elementor-element elementor-element-6360a02a elementor-widget elementor-widget-text-editor"
        data-id="6360a02a" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;&nbsp;</p>
        </div>
    </div>
  
</div>
',
        ]);
        DB::table('news')->insert([
            'title' => 'What Are The Most Notable Differences Between 2d Design & 3d Design?',
            'category' => 'Design',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...',
            'images' => '1718612555_images.jpg',
            'content' => '<div class="elementor-widget-wrap elementor-element-populated">
    <div class="elementor-element elementor-element-6a13b31e elementor-widget elementor-widget-heading"
        data-id="6a13b31e" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">Video Streaming Service For Learning 3D Design
            </h2>
        </div>
    </div>
    <div class="elementor-element elementor-element-33de3508 elementor-widget elementor-widget-text-editor"
        data-id="33de3508" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit.</p>
        </div>
    </div>
    <div class="elementor-element elementor-element-71833d1a elementor-widget elementor-widget-jkit_post_featured_image"
        data-id="71833d1a" data-element_type="widget" data-widget_type="jkit_post_featured_image.default">
        <div class="elementor-widget-container">
            <div class="jeg-elementor-kit jkit-post-featured-image jeg_module_744_7_66699f5b32ad6">
                <div class="post-featured-image "><img loading="lazy" decoding="async" width="1440" height="961"
                        src="/users/wp-content/uploads/sites/303/2022/07/3d-artist-using-blueprint-with-graphics-tablet-and-computers-while-working-on-project-of-3d-design-e1658281334651.jpg"
                        class="attachment-full size-full wp-post-image"
                        alt="3d artist using blueprint with graphics tablet and computers while working on project of 3d design">
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-3efe8b0d elementor-widget elementor-widget-text-editor"
        data-id="3efe8b0d" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;</p>
        </div>
    </div>
    <section
        class="elementor-section elementor-inner-section elementor-element elementor-element-4bf6e505 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4bf6e505" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-310f4a7f"
                data-id="310f4a7f" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5e36c106 elementor-widget elementor-widget-spacer"
                        data-id="5e36c106" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                          
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-72d4e943"
                data-id="72d4e943" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2eb37db3 elementor-widget elementor-widget-heading"
                        data-id="2eb37db3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">We Offer Everything About 3D
                                Design</h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-68b98ea6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="68b98ea6" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Trusted Platform</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Multi Purpose</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Document Manage</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Security Ensured</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Real Interactions</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">User Experience</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="elementor-element elementor-element-6360a02a elementor-widget elementor-widget-text-editor"
        data-id="6360a02a" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;&nbsp;</p>
        </div>
    </div>
  
</div>
',
        ]);
        DB::table('news')->insert([
            'title' => 'What Are The Most Notable Differences Between 2d Design & 3d Design?',
            'category' => 'Design',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...',
            'images' => '1718612555_images.jpg',
            'content' => '<div class="elementor-widget-wrap elementor-element-populated">
    <div class="elementor-element elementor-element-6a13b31e elementor-widget elementor-widget-heading"
        data-id="6a13b31e" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">Video Streaming Service For Learning 3D Design
            </h2>
        </div>
    </div>
    <div class="elementor-element elementor-element-33de3508 elementor-widget elementor-widget-text-editor"
        data-id="33de3508" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit.</p>
        </div>
    </div>
    <div class="elementor-element elementor-element-71833d1a elementor-widget elementor-widget-jkit_post_featured_image"
        data-id="71833d1a" data-element_type="widget" data-widget_type="jkit_post_featured_image.default">
        <div class="elementor-widget-container">
            <div class="jeg-elementor-kit jkit-post-featured-image jeg_module_744_7_66699f5b32ad6">
                <div class="post-featured-image "><img loading="lazy" decoding="async" width="1440" height="961"
                        src="/users/wp-content/uploads/sites/303/2022/07/3d-artist-using-blueprint-with-graphics-tablet-and-computers-while-working-on-project-of-3d-design-e1658281334651.jpg"
                        class="attachment-full size-full wp-post-image"
                        alt="3d artist using blueprint with graphics tablet and computers while working on project of 3d design">
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-3efe8b0d elementor-widget elementor-widget-text-editor"
        data-id="3efe8b0d" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;</p>
        </div>
    </div>
    <section
        class="elementor-section elementor-inner-section elementor-element elementor-element-4bf6e505 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4bf6e505" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-310f4a7f"
                data-id="310f4a7f" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5e36c106 elementor-widget elementor-widget-spacer"
                        data-id="5e36c106" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                          
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-72d4e943"
                data-id="72d4e943" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2eb37db3 elementor-widget elementor-widget-heading"
                        data-id="2eb37db3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">We Offer Everything About 3D
                                Design</h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-68b98ea6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="68b98ea6" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Trusted Platform</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Multi Purpose</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Document Manage</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Security Ensured</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Real Interactions</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">User Experience</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="elementor-element elementor-element-6360a02a elementor-widget elementor-widget-text-editor"
        data-id="6360a02a" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;&nbsp;</p>
        </div>
    </div>
  
</div>
',
        ]);
        DB::table('news')->insert([
            'title' => 'What Are The Most Notable Differences Between 2d Design & 3d Design?',
            'category' => 'Design',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna...',
            'images' => '1718612555_images.jpg',
            'content' => '<div class="elementor-widget-wrap elementor-element-populated">
    <div class="elementor-element elementor-element-6a13b31e elementor-widget elementor-widget-heading"
        data-id="6a13b31e" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
            <h2 class="elementor-heading-title elementor-size-default">Video Streaming Service For Learning 3D Design
            </h2>
        </div>
    </div>
    <div class="elementor-element elementor-element-33de3508 elementor-widget elementor-widget-text-editor"
        data-id="33de3508" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit.</p>
        </div>
    </div>
    <div class="elementor-element elementor-element-71833d1a elementor-widget elementor-widget-jkit_post_featured_image"
        data-id="71833d1a" data-element_type="widget" data-widget_type="jkit_post_featured_image.default">
        <div class="elementor-widget-container">
            <div class="jeg-elementor-kit jkit-post-featured-image jeg_module_744_7_66699f5b32ad6">
                <div class="post-featured-image "><img loading="lazy" decoding="async" width="1440" height="961"
                        src="/users/wp-content/uploads/sites/303/2022/07/3d-artist-using-blueprint-with-graphics-tablet-and-computers-while-working-on-project-of-3d-design-e1658281334651.jpg"
                        class="attachment-full size-full wp-post-image"
                        alt="3d artist using blueprint with graphics tablet and computers while working on project of 3d design">
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-3efe8b0d elementor-widget elementor-widget-text-editor"
        data-id="3efe8b0d" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;</p>
        </div>
    </div>
    <section
        class="elementor-section elementor-inner-section elementor-element elementor-element-4bf6e505 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4bf6e505" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-310f4a7f"
                data-id="310f4a7f" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5e36c106 elementor-widget elementor-widget-spacer"
                        data-id="5e36c106" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                          
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-72d4e943"
                data-id="72d4e943" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2eb37db3 elementor-widget elementor-widget-heading"
                        data-id="2eb37db3" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">We Offer Everything About 3D
                                Design</h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-68b98ea6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="68b98ea6" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Trusted Platform</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Multi Purpose</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Document Manage</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Security Ensured</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">Real Interactions</span>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-check"></i> </span>
                                    <span class="elementor-icon-list-text">User Experience</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="elementor-element elementor-element-6360a02a elementor-widget elementor-widget-text-editor"
        data-id="6360a02a" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.&nbsp;&nbsp;</p>
        </div>
    </div>
  
</div>
',
        ]);
    }
}
