<?php get_header(); ?>

<section class="section-mv">
    <img class="w-full max-h-[700px] object-cover object-center" src="<?= THEME_URL ?>/images/hd_bg.webp" alt="">
</section>

<!-- Introduction Section -->
<section class="content-section section-white py-20">
    <div class="container-responsive">
        <div class="text-center max-w-5xl mx-auto">
            <h2 class="section-title">
                この街で、なくてはならない薬局に
            </h2>

            <!-- Main Content Paragraphs -->
            <div class="space-y-8 mt-12">
                <p class="text-lg leading-relaxed text-gray-700 max-w-3xl mx-auto">
                    当社は愛知県内に複数の薬局を運営しております。
                </p>

                <p class="text-lg leading-relaxed text-gray-700 max-w-4xl mx-auto">
                    地域密着型の薬局として多くの患者様にご評価いただき、着実に店舗数を拡大してまいりました。
                </p>

                <p class="text-lg leading-relaxed text-gray-700 max-w-3xl mx-auto mt-12">
                    そんな当社では現在、一緒に働く薬剤師を大募集しております。
                </p>

                <div class="bg-gradient-to-r from-orange-50 to-pink-50 rounded-2xl p-8 mt-12 max-w-4xl mx-auto border border-orange-100">
                    <p class="text-lg leading-relaxed text-gray-700">
                        スタッフが快適に働けるよう、福利厚生や職場環境を整えておりますので、
                    </p>
                    <p class="text-lg leading-relaxed text-gray-700 mt-2">
                        長く働き続けたい方はぜひお気軽にご応募ください。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Job Search Section -->
<section class="content-section section-peach py-20">
    <div class="container-responsive">
        <div class="text-center mb-16">
            <h2 class="section-title text-orange-500 mb-4">
                こんなお仕事探していませんか？
            </h2>
            <div class="flex justify-center items-center space-x-2 mb-8">
                <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
            <!-- Job Card 1 -->
            <div class="job-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-100 flex items-center justify-center">
                    <img src="https://via.placeholder.com/300x300/f0f0f0/666666?text=薬剤師" alt="薬剤師の資格を活かしたい" class="w-full h-full object-cover">
                </div>
                <div class="p-6 text-center">
                    <p class="text-gray-800 font-medium text-lg">薬剤師の資格を活かしたい</p>
                </div>
            </div>

            <!-- Job Card 2 -->
            <div class="job-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-100 flex items-center justify-center">
                    <img src="https://via.placeholder.com/300x300/f0f0f0/666666?text=プライベート" alt="仕事とプライベートを両立させたい" class="w-full h-full object-cover">
                </div>
                <div class="p-6 text-center">
                    <p class="text-gray-800 font-medium text-lg">仕事とプライベートを<br>両立させたい</p>
                </div>
            </div>

            <!-- Job Card 3 -->
            <div class="job-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-100 flex items-center justify-center">
                    <img src="https://via.placeholder.com/300x300/f0f0f0/666666?text=安定収入" alt="安定した収入を得たい" class="w-full h-full object-cover">
                </div>
                <div class="p-6 text-center">
                    <p class="text-gray-800 font-medium text-lg">安定した収入を得たい</p>
                </div>
            </div>

            <!-- Job Card 4 -->
            <div class="job-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-100 flex items-center justify-center">
                    <img src="https://via.placeholder.com/300x300/f0f0f0/666666?text=長期雇用" alt="長く安心して働き続けたい" class="w-full h-full object-cover">
                </div>
                <div class="p-6 text-center">
                    <p class="text-gray-800 font-medium text-lg">長く安心して働き続けたい</p>
                </div>
            </div>

            <!-- Job Card 5 -->
            <div class="job-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-100 flex items-center justify-center">
                    <img src="https://via.placeholder.com/300x300/f0f0f0/666666?text=患者ケア" alt="患者様一人ひとりに寄り添って働きたい" class="w-full h-full object-cover">
                </div>
                <div class="p-6 text-center">
                    <p class="text-gray-800 font-medium text-lg">患者様一人ひとりに<br>寄り添って働きたい</p>
                </div>
            </div>

            <!-- Empty slot for 3x2 grid alignment -->
            <div class="hidden md:block"></div>
        </div>

        <div class="text-center">
            <a href="#inquiry-form" class="inline-block bg-gradient-to-r from-orange-400 to-pink-400 text-white px-8 py-4 rounded-full font-medium text-lg hover:from-orange-500 hover:to-pink-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                そんな方は、ぜひ株式会社C&Cメディカルへ！
            </a>
        </div>
    </div>
</section>

<!-- Manga Section -->
<section class="content-section section-white">
    <div class="container-responsive">
        <div class="text-center mb-12">
            <h2 class="section-title">
                マンガでわかる株式会社C&Cメディカル
            </h2>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                <div class="text-center">
                    <svg class="icon-large" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-gray-500">マンガコンテンツがここに表示されます</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5 Reasons Section -->
<section class="content-section py-20" style="background: linear-gradient(135deg, #FFE5E5, #E5F3FF, #E5FFE5);">
    <div class="container-responsive">
        <div class="text-center mb-16">
            <h2 class="section-title text-orange-500 mb-4">
                当社が選ばれる5つの理由
            </h2>
            <div class="flex justify-center items-center space-x-2 mb-8">
                <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
            <!-- First row: 3 cards -->
            <!-- Reason Card 01 -->
            <div class="relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="absolute top-4 right-4 z-10">
                    <div class="w-12 h-12 bg-orange-400 text-white rounded-full flex items-center justify-center font-bold text-lg">
                        01
                    </div>
                </div>
                <div class="aspect-square">
                    <img src="https://via.placeholder.com/400x300/f0f0f0/666666?text=努力評価" alt="努力や成長をしっかり評価してもらえる" class="w-full h-full object-cover">
                </div>
                <div class="p-6 text-center">
                    <p class="text-gray-800 font-medium text-lg leading-relaxed">努力や成長をしっかり<br>評価してもらえる</p>
                </div>
            </div>

            <!-- Reason Card 02 -->
            <div class="relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="absolute top-4 right-4 z-10">
                    <div class="w-12 h-12 bg-orange-400 text-white rounded-full flex items-center justify-center font-bold text-lg">
                        02
                    </div>
                </div>
                <div class="aspect-square">
                    <img src="https://via.placeholder.com/400x300/f0f0f0/666666?text=地域密着" alt="地域密着型のため、患者様との関係性を築きやすい" class="w-full h-full object-cover">
                </div>
                <div class="p-6 text-center">
                    <p class="text-gray-800 font-medium text-lg leading-relaxed">地域密着型のため、患者様<br>との関係性を築きやすい</p>
                </div>
            </div>

            <!-- Reason Card 03 -->
            <div class="relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="absolute top-4 right-4 z-10">
                    <div class="w-12 h-12 bg-orange-400 text-white rounded-full flex items-center justify-center font-bold text-lg">
                        03
                    </div>
                </div>
                <div class="aspect-square">
                    <img src="https://via.placeholder.com/400x300/f0f0f0/666666?text=研修会" alt="クリニックとの合同研修会でスキルアップができる" class="w-full h-full object-cover">
                </div>
                <div class="p-6 text-center">
                    <p class="text-gray-800 font-medium text-lg leading-relaxed">クリニックとの合同研修会<br>でスキルアップができる</p>
                </div>
            </div>

            <!-- Second row: 2 cards centered -->
            <div class="md:col-start-1 lg:col-start-1">
                <!-- Reason Card 04 -->
                <div class="relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 max-w-sm mx-auto">
                    <div class="absolute top-4 right-4 z-10">
                        <div class="w-12 h-12 bg-orange-400 text-white rounded-full flex items-center justify-center font-bold text-lg">
                            04
                        </div>
                    </div>
                    <div class="aspect-square">
                        <img src="https://via.placeholder.com/400x300/f0f0f0/666666?text=ワークライフ" alt="ワークライフバランスを重視した働き方ができる" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <p class="text-gray-800 font-medium text-lg leading-relaxed">ワークライフバランスを<br>重視した働き方ができる</p>
                    </div>
                </div>
            </div>

            <div class="md:col-start-3 lg:col-start-3">
                <!-- Reason Card 05 -->
                <div class="relative bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 max-w-sm mx-auto">
                    <div class="absolute top-4 right-4 z-10">
                        <div class="w-12 h-12 bg-orange-400 text-white rounded-full flex items-center justify-center font-bold text-lg">
                            05
                        </div>
                    </div>
                    <div class="aspect-square">
                        <img src="https://via.placeholder.com/400x300/f0f0f0/666666?text=フォロー" alt="会社や仲間からのフォローが手厚い" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 text-center">
                        <p class="text-gray-800 font-medium text-lg leading-relaxed">会社や仲間からの<br>フォローが手厚い</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center space-y-4">
            <a href="#trial" class="inline-block bg-gradient-to-r from-orange-400 to-pink-400 text-white px-8 py-3 rounded-full font-medium text-lg hover:from-orange-500 hover:to-pink-500 transition-all duration-300 shadow-lg hover:shadow-xl mr-4">
                体験入社はこちら
            </a>
            <a href="#inquiry-form" class="inline-block bg-gradient-to-r from-green-400 to-green-500 text-white px-8 py-3 rounded-full font-medium text-lg hover:from-green-500 hover:to-green-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                お問い合わせ
            </a>
        </div>
    </div>
</section>

<!-- High Income Section -->
<section class="content-section section-white py-20">
    <div class="container-responsive">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    <span class="text-orange-500">高収入×働きやすさ</span><br>
                    <span class="text-gray-800">理想の職場がここに</span>
                </h2>

                <div class="space-y-4 text-gray-700 leading-relaxed">
                    <p>当社では、スタッフ一人ひとりが</p>
                    <p>快適に働ける環境づくりを何よりも大切にしております。</p>
                    <p>一人ひとりの努力や成長をしっかり評価するため、</p>
                    <p>頑張った分がお給料として反映されます。</p>
                    <p>また十分なお休みを設けるとともに、</p>
                    <p>各種保険などの福利厚生も整えておりますので、</p>
                    <p>安心して働いていただけます！</p>
                </div>
            </div>

            <!-- Image -->
            <div class="relative">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="https://via.placeholder.com/600x400/f0f0f0/666666?text=薬局の棚" alt="薬剤師が薬局の棚で薬を整理している様子" class="w-full h-[400px] object-cover">
                </div>
                <!-- Decorative elements can be added here if needed -->
            </div>
        </div>
    </div>
</section>

<!-- Training System Section -->
<section class="content-section section-peach">
    <div class="container-responsive">
        <div class="content-grid">
            <div class="bg-gray-200 rounded-lg h-80 flex items-center justify-center">
                <div class="text-center">
                    <svg class="icon-large" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <p class="text-gray-500">タブレットを見ながら薬を並べる薬剤師</p>
                </div>
            </div>
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                    経験者優遇 充実の研修制度
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    経験豊富な薬剤師の皆様を優遇いたします。
                    また、充実した研修制度により、スキルアップをサポートします。
                    新しい技術や知識を習得できる環境を整えています。
                </p>
                <ul class="feature-list">
                    <li class="feature-item">
                        <svg class="feature-icon feature-icon-orange" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        経験者優遇の給与
                    </li>
                    <li class="feature-item">
                        <svg class="feature-icon feature-icon-orange" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        充実した研修制度
                    </li>
                    <li class="feature-item">
                        <svg class="feature-icon feature-icon-orange" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        スキルアップ支援
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Application Requirements Section -->
<section class="content-section py-20" style="background: linear-gradient(135deg, #FFE5E5, #E5F3FF, #E5FFE5);">
    <div class="container-responsive">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-start">
            <!-- Title Section -->
            <div class="lg:col-span-1">
                <h2 class="text-3xl md:text-4xl font-bold text-orange-500 mb-4">
                    募集要項
                </h2>
            </div>

            <!-- Requirements Table -->
            <div class="lg:col-span-4">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <table class="w-full">
                        <tbody>
                            <!-- 職種 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 w-32 border-r border-gray-100">
                                    業務内容
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    薬剤師
                                </td>
                            </tr>

                            <!-- 雇用区分 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    雇用区分
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    正社員
                                </td>
                            </tr>

                            <!-- 雇用期間 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    雇用期間
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    定めなし
                                </td>
                            </tr>

                            <!-- 契約期間 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    契約期間
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    定めなし
                                </td>
                            </tr>

                            <!-- 就業期間 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    就業期間
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    あり（3ヶ月）<br>
                                    <span class="text-sm text-gray-600">※試用期間中の給与・変更なし</span>
                                </td>
                            </tr>

                            <!-- 勤務地 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    勤務地
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    愛知県名古屋市中区大須1-2114
                                </td>
                            </tr>

                            <!-- 交通アクセス -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    交通アクセス
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    名鉄瀬戸線　大森・金城学院前駅より徒歩3分
                                </td>
                            </tr>

                            <!-- 賃金 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    賃金
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    なし
                                </td>
                            </tr>

                            <!-- 休日 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    休日
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    週休2日制（休診日・日祝）
                                </td>
                            </tr>

                            <!-- 給与 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    給与
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    年俸制：4,200,000円～5,000,000円<br>
                                    月給：350,000円～650,000円
                                </td>
                            </tr>

                            <!-- その他手当 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    その他手当
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    管理薬剤師手当<br>
                                    認定薬剤師手当<br>
                                    かかりつけ薬剤師手当<br>
                                    交通費（全額支給）
                                </td>
                            </tr>

                            <!-- 保険 -->
                            <tr class="border-b border-gray-100">
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    保険
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    労災保険・健康保険・雇用保険・厚生年金完備
                                </td>
                            </tr>

                            <!-- 転勤 -->
                            <tr>
                                <td class="bg-orange-50 text-orange-600 font-medium px-6 py-4 border-r border-gray-100">
                                    転勤
                                </td>
                                <td class="px-6 py-4 text-gray-800">
                                    基本なし
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Store List Section -->
<section class="content-section section-peach py-20">
    <div class="container-responsive">
        <div class="text-center mb-16">
            <h2 class="section-title text-orange-500 mb-4">
                店舗一覧
            </h2>
            <div class="flex justify-center items-center space-x-2 mb-8">
                <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Store Card 1 - どんぐり調剤薬局 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-200"></div>
                <div class="p-6 text-center">
                    <h3 class="text-orange-500 font-bold text-xl mb-2">どんぐり調剤薬局</h3>
                    <p class="text-gray-700 text-sm mb-1">〒463-0021</p>
                    <p class="text-gray-700 text-sm">愛知県名古屋市守山区大字志段味字東谷2114</p>
                </div>
            </div>

            <!-- Store Card 2 - あおぞら薬局 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-200"></div>
                <div class="p-6 text-center">
                    <h3 class="text-orange-500 font-bold text-xl mb-2">あおぞら薬局</h3>
                    <p class="text-gray-700 text-sm mb-1">〒487-0027</p>
                    <p class="text-gray-700 text-sm">愛知県春日井市松本町1-3-9</p>
                </div>
            </div>

            <!-- Store Card 3 - クローバー薬局 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-200"></div>
                <div class="p-6 text-center">
                    <h3 class="text-orange-500 font-bold text-xl mb-2">クローバー薬局</h3>
                    <p class="text-gray-700 text-sm mb-1">〒491-0925</p>
                    <p class="text-gray-700 text-sm">愛知県一宮市大和町南高井蓮原</p>
                </div>
            </div>

            <!-- Store Card 4 - なかよし薬局 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-200"></div>
                <div class="p-6 text-center">
                    <h3 class="text-orange-500 font-bold text-xl mb-2">なかよし薬局</h3>
                    <p class="text-gray-700 text-sm mb-1">〒491-0141</p>
                    <p class="text-gray-700 text-sm">愛知県一宮市浅井町東海道石刀山47-1</p>
                </div>
            </div>

            <!-- Store Card 5 - タートル薬局 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-200"></div>
                <div class="p-6 text-center">
                    <h3 class="text-orange-500 font-bold text-xl mb-2">タートル薬局</h3>
                    <p class="text-gray-700 text-sm mb-1">〒441-8113</p>
                    <p class="text-gray-700 text-sm">愛知県豊橋市西幸町松之32-1</p>
                </div>
            </div>

            <!-- Store Card 6 - さくらなみき薬局 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="aspect-square bg-gray-200"></div>
                <div class="p-6 text-center">
                    <h3 class="text-orange-500 font-bold text-xl mb-2">さくらなみき薬局</h3>
                    <p class="text-gray-700 text-sm mb-1">〒468-0009</p>
                    <p class="text-gray-700 text-sm">愛知県名古屋市天白区元植田2-2406</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compassion Section -->
<section class="content-section section-white">
    <div class="container-responsive">
        <div class="content-grid">
            <div class="bg-gray-200 rounded-lg h-80 flex items-center justify-center">
                <div class="text-center">
                    <svg class="icon-large" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <p class="text-gray-500">棚の薬を見る笑顔の女性薬剤師</p>
                </div>
            </div>
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                    国と一味に思いやりを描けよう
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    私たちは、地域の皆様の健康を支えるため、
                    思いやりを持ってサービスを提供いたします。
                    国と共に、地域社会の発展に貢献していきます。
                </p>
                <ul class="feature-list">
                    <li class="feature-item">
                        <svg class="feature-icon feature-icon-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        地域社会への貢献
                    </li>
                    <li class="feature-item">
                        <svg class="feature-icon feature-icon-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        思いやりのあるサービス
                    </li>
                    <li class="feature-item">
                        <svg class="feature-icon feature-icon-green" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        健康な社会の実現
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Inquiry Form Section -->
<section id="inquiry-form" class="content-section section-peach">
    <div class="container-responsive">
        <div class="text-center mb-12">
            <h2 class="section-title">
                お問い合わせフォーム
            </h2>
        </div>

        <div class="max-w-2xl mx-auto">
            <form class="form-container">
                <div class="space-y-6">
                    <div>
                        <label class="form-label">
                            お名前 <span class="required-mark">必須</span>
                        </label>
                        <input type="text" class="form-field" placeholder="お名前を入力してください">
                    </div>

                    <div>
                        <label class="form-label">
                            フリガナ <span class="required-mark">必須</span>
                        </label>
                        <input type="text" class="form-field" placeholder="フリガナを入力してください">
                    </div>

                    <div>
                        <label class="form-label">
                            メールアドレス <span class="required-mark">必須</span>
                        </label>
                        <input type="email" class="form-field" placeholder="メールアドレスを入力してください">
                    </div>

                    <div>
                        <label class="form-label">
                            電話番号 <span class="required-mark">必須</span>
                        </label>
                        <input type="tel" class="form-field" placeholder="電話番号を入力してください">
                    </div>

                    <div>
                        <label class="form-label">
                            お問い合わせ内容 <span class="required-mark">必須</span>
                        </label>
                        <textarea rows="4" class="form-field" placeholder="お問い合わせ内容を入力してください"></textarea>
                    </div>

                    <div>
                        <label class="form-label">
                            希望店舗
                        </label>
                        <select class="form-field">
                            <option>店舗を選択してください</option>
                            <option>名古屋店</option>
                            <option>栄店</option>
                            <option>大須店</option>
                            <option>千種店</option>
                            <option>中村店</option>
                            <option>瑞穂店</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn-green">
                            送信する
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
