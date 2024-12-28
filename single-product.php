<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        :root {
            --color-background: #f5f5f7;
            --color-text: #1d1d1f;
            --color-text-secondary: #86868b;
            --color-primary: #0071e3;
            --color-warning: #ff3b30;
            --color-star: #ff9500;
            --color-border: #d2d2d7;
            --color-bar-bg: #e0e0e0;
            --font-sans: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            --border-radius-sm: 8px;
            --border-radius-md: 12px;
            --border-radius-lg: 20px;
            --spacing-xs: 5px;
            --spacing-sm: 10px;
            --spacing-md: 15px;
            --spacing-lg: 20px;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--color-background);
            color: var(--color-text);
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 0 auto;
            padding: var(--spacing-lg);
            background-color: #fff;
        }

        .app-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: var(--spacing-lg);
        }

        .app-info {
            display: flex;
            align-items: flex-start;
            gap: var(--spacing-md);
        }

        .app-icon {
            width: 92px;
            height: 92px;
            border-radius: var(--border-radius-lg);
        }

        .app-title {
            font-size: 24px;
            margin: 0 0 var(--spacing-sm);
        }

        .btn {
            border: none;
            border-radius: var(--border-radius-lg);
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: var(--color-primary);
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0062c1;
        }

        .btn-icon {
            background: none;
            color: var(--color-primary);
            padding: var(--spacing-xs);
        }

        .btn-icon:hover {
            background-color: rgba(0, 113, 227, 0.1);
        }

        .app-stats {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin-bottom: var(--spacing-lg);
            text-align: center;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .stat-item svg,
        .stat-item .version-icon {
            width: 24px;
            height: 24px;
            margin-bottom: var(--spacing-xs);
            color: var(--color-text-secondary);
        }

        .stat-label {
            font-size: 12px;
            color: var(--color-text-secondary);
        }

        .stat-value {
            font-size: 14px;
        }

        .app-screenshots {
            display: flex;
            gap: var(--spacing-sm);
            overflow-x: auto;
            margin-bottom: var(--spacing-lg);
            padding-bottom: var(--spacing-sm);
        }

        .screenshot {
            width: 300px;
            height: 200px;
            border-radius: var(--border-radius-sm);
            object-fit: cover;
        }

        .app-compatibility {
            font-size: 14px;
            margin-bottom: var(--spacing-lg);
        }

        .warning {
            color: var(--color-warning);
        }

        .app-ratings h2,
        .app-details h2,
        .similar-apps h2 {
            font-size: 20px;
            margin-bottom: var(--spacing-sm);
        }

        .ratings-container {
            display: flex;
            gap: var(--spacing-lg);
        }

        .rating-bars {
            flex-grow: 1;
        }

        .rating-bar {
            display: flex;
            align-items: center;
            margin-bottom: var(--spacing-xs);
        }

        .stars {
            width: 70px;
            color: var(--color-star);
        }

        .bar-bg {
            flex-grow: 1;
            height: 8px;
            background-color: var(--color-bar-bg);
            border-radius: 4px;
            overflow: hidden;
        }

        .bar-fill {
            height: 100%;
            background-color: var(--color-star);
        }

        .rating-summary {
            text-align: center;
        }

        .rating-average {
            font-size: 36px;
            font-weight: bold;
        }

        .rating-label {
            font-size: 12px;
            color: var(--color-text-secondary);
        }

        .app-details {
            margin-bottom: var(--spacing-lg);
        }

        .info-list {
            display: grid;
            gap: var(--spacing-sm);
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: var(--spacing-sm) 0;
            border-bottom: 1px solid var(--color-border);
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-item dt {
            color: var(--color-text-secondary);
        }

        .similar-apps {
            margin-bottom: var(--spacing-lg);
            overflow: hidden;
        }

        .similar-apps-container {
            width: 100%;
            overflow: hidden;
        }

        .similar-apps-scroll {
            display: flex;
            animation: scroll 30s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .similar-app-item {
            flex: 0 0 auto;
            width: 80px;
            margin-right: var(--spacing-sm);
            text-align: center;
        }

        .similar-app-icon {
            width: 60px;
            height: 60px;
            border-radius: var(--border-radius-md);
            object-fit: cover;
        }

        .similar-app-name {
            font-size: 12px;
            margin-top: var(--spacing-xs);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (max-width: 600px) {
            .app-stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .screenshot {
                width: 100%;
                height: auto;
            }

            .ratings-container {
                flex-direction: column;
            }

            .similar-apps-scroll {
                animation: scroll 20s linear infinite;
            }
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --color-background: #1c1c1e;
                --color-text: #ffffff;
                --color-text-secondary: #8e8e93;
                --color-primary: #0a84ff;
                --color-warning: #ff453a;
                --color-star: #ffd60a;
                --color-border: #38383a;
                --color-bar-bg: #2c2c2e;
            }

            .container {
                background-color: #2c2c2e;
            }
        }
    </style>
</head>

<body <?php body_class() ?>>
    <?php
    if (have_posts()): while (have_posts()): the_post();

            global $product;

    ?>
            <div class="container">
                <header class="app-header">
                    <div class="app-info">
                        <?php echo $product->get_image("woocommerce_gallery_thumbnail"); ?>
                        <div>
                            <h1 class="app-title"><?php echo $product->get_name() ?></h1>
                            <button class="btn btn-primary">دریافت</button>
                        </div>
                    </div>
                    <button class="btn btn-icon" aria-label="اشتراک‌گذاری">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="5" r="3"></circle>
                            <circle cx="6" cy="12" r="3"></circle>
                            <circle cx="18" cy="19" r="3"></circle>
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                        </svg>
                    </button>
                </header>

                <section class="app-stats">
                    <div class="stat-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        <span class="stat-label">تعداد دانلود</span>
                        <strong class="stat-value">۵M+</strong>
                    </div>
                    <div class="stat-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="stat-label">نوع برنامه</span>
                        <strong class="stat-value">اکشن/نبرد</strong>
                    </div>
                    <div class="stat-item">
                        <span class="version-icon">1.0</span>
                        <span class="stat-label">نسخه</span>
                        <strong class="stat-value">۱٫۰٫۲۲</strong>
                    </div>
                    <div class="stat-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="8"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                        <span class="stat-label">قیمت</span>
                        <strong class="stat-value"><?php echo !empty($product->get_price()) ? number_format($product->get_price()) . " " . '<small>' . get_woocommerce_currency_symbol() . '</small>' : "رایگان"; ?></strong>
                    </div>
                </section>
                <?php if (!empty($product->get_gallery_image_ids())): ?>
                    <section class="app-screenshots" aria-label="تصاویر برنامه">
                        <?php
                        foreach ($product->get_gallery_image_ids() as $image_id) {
                            echo wp_get_attachment_image($image_id, 'full', ['class' => 'screenshot']);
                        }
                        ?>
                    </section>
                <?php endif; ?>
                <section class="app-compatibility">
                    <?php the_content() ?>
                </section>

                <section class="app-ratings">
                    <h2>امتیاز و دیدگاه‌ها</h2>
                    <div class="ratings-container">
                        <div class="rating-bars">
                            <div class="rating-bar">
                                <span class="stars" aria-label="5 ستاره">★★★★★</span>
                                <div class="bar-bg">
                                    <div class="bar-fill" style="width: 100%;"></div>
                                </div>
                            </div>
                            <div class="rating-bar">
                                <span class="stars" aria-label="4 ستاره">★★★★☆</span>
                                <div class="bar-bg">
                                    <div class="bar-fill" style="width: 80%;"></div>
                                </div>
                            </div>
                            <div class="rating-bar">
                                <span class="stars" aria-label="3 ستاره">★★★☆☆</span>
                                <div class="bar-bg">
                                    <div class="bar-fill" style="width: 60%;"></div>
                                </div>
                            </div>
                            <div class="rating-bar">
                                <span class="stars" aria-label="2 ستاره">★★☆☆☆</span>
                                <div class="bar-bg">
                                    <div class="bar-fill" style="width: 40%;"></div>
                                </div>
                            </div>
                            <div class="rating-bar">
                                <span class="stars" aria-label="1 ستاره">★☆☆☆☆</span>
                                <div class="bar-bg">
                                    <div class="bar-fill" style="width: 20%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="rating-summary">
                            <div class="rating-average">5</div>
                            <div class="rating-label">امتیاز در ۵ ستاره</div>
                        </div>
                    </div>
                </section>

                <section class="app-details">
                    <h2>اطلاعات برنامه</h2>
                    <dl class="info-list">
                        <div class="info-item">
                            <dt>حجم برنامه</dt>
                            <dd>۳۲۳۹ مگابایت</dd>
                        </div>
                        <div class="info-item">
                            <dt>نسخه برنامه</dt>
                            <dd>۱٫۰٫۲۲</dd>
                        </div>
                        <div class="info-item">
                            <dt>دسته بندی</dt>
                            <dd>بازی</dd>
                        </div>
                        <div class="info-item">
                            <dt>سازگاری</dt>
                            <dd>iOS ۱۳٫۰+</dd>
                        </div>
                    </dl>
                </section>

                <section class="similar-apps">
                    <h2>شاید دوست داشته باشید</h2>
                    <div class="similar-apps-container">
                        <div class="similar-apps-scroll">
                            <?php
                            $args = array(
                                'post_type' => 'product',
                                'posts_per_page' => 7,
                                'post_not_in' => array($product->get_id()),
                                'orderby' => 'rand',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'product_cat',
                                        'field' => 'term_id',
                                        'terms' => $product->get_category_ids()
                                    ),
                                )
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                            ?>
                                    <div class="similar-app-item">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); ?>
                                        <p class="similar-app-name"><?php the_title(); ?></p>
                                    </div>
                            <?php
                                }
                                wp_reset_postdata();
                            } ?>

                        </div>
                    </div>
                </section>
            </div>
    <?php endwhile;
    endif; ?>
</body>

</html>