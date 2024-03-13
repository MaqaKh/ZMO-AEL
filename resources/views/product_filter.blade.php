
@extends('master')


@section('content')

<!-- inner banner -->
<section class="inner-banner">
    <div class="w3l-breadcrumb py-5">
        <div class="container py-xl-5 py-md-4 mt-5">
            <h4 class="inner-text-title font-weight-bold mb-sm-2">Product</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><span aria-hidden="true" class="fa fa-chevron-right mx-2"></span>Products</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->
    @php
    $currentLanguage = app()->getLocale(); // Get the current language
    @endphp

<!-- blog section -->
<div class="w3l-homeblock2 py-5">
    <div class="container py-md-5 py-4">

        <div class="row">
            <div class="service-section py-5">
                <div class="container py-md-5 py-4">
                    <div class="row align-items-center mb-5">
                        <div class="col-md-6 section-heading text-left">
                            <!--                    <h5 class="small-title-2">Web Services</h5>-->
                            <h3 class="title-style-2">
                                Our Best Products</h3>
                        </div>

                        <div class="col-md-6 section-heading mt-md-0 mt-2 text-right">
                            <a href="/product" class="ml-auto">All products</a>
                            <!-- You can add other content here if needed -->
                        </div>
                    </div>



                    <div class="row justify-content-center">




                    @if($products->isEmpty())
                    <p>There are no products available.</p>
                    @else

                      @foreach($products as $product)
                                <div class="col-lg-4 col-md-6 item mt-4 mb-4">
                                    <div class="card" style="height: 450px; ">
                                <div class="card-header p-0 position-relative border-0">
                                    <a href="{{ route('product-details', ['id' => $product->id]) }}"  >
                                        <img alt="card-image"
                                             class="d-block img-responsive"
                                             src={{$product->image_path}}
>
                                    </a>
                                </div>

                                <div class="card-body service-details">
                                    <span class="label-style">
                                        @if($currentLanguage == 'en')
                                        {{$product->category->name_en}}
                                      @elseif($currentLanguage == 'ru')
                                         {{$product->category->name_ru}}
                                      @elseif($currentLanguage == 'ge')
                                        {{$product->category->name_ge}}
                                      @else
                                        {{$product->category->name_en}}
                                      @endif


                                    </span>
                                    <a class="service-heading" href="{{ route('product-details', ['id' => $product->id]) }}">{{$product->name}}</a>
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                </div>
                            </div>
                        </div>

                          @endforeach

                          {{$products->links()}}
                          @endif


                    </div>

                </div>

            </div>

        </div>

        <div class="row text-left">

            @if ($currentLanguage == 'en' && $category->name_en == 'motor')
                <h2 class="mb-5"> ENGINE OIL: CLASS ILSAC GF-5
                </h2>
                <p class="mb-4">
                    Introduced in 2010. GF-5 oils should provide better piston protection against high-temperature
                    deposits and better protection of turbochargers, have better compatibility with engine sealing
                    parts, increased durability when used in engines with ethanol-containing gasoline up to E85. Also
                    more stringent requirements for sludge formation. ILSAC GF-5 oils are formulated to improve fuel
                    efficiency and provide improved performance in a wide range of areas, including piston protection
                    against high temperature deposits, improved protection against engine deposits, and protection for
                    engines fueled with ethanol fuels up to E85. to show that the oil is formulated to improve fuel
                    economy.
                </p>

                <p class="mb-4">ILSAC GF-5 oils are superior to ILSAC GF-4 and earlier and can effectively lubricate
                    engines meeting those standards.
                </p>

                <p class="mb-4">
                    ILSAC GF-5 oils are superior to ILSAC GF-4 and earlier and can effectively lubricate engines meeting
                    those standards.
                </p>

                <p class="mb-4">ILSAC GF-5 compliant oils typically have low HTHS (≤ 3.5 cP) SAE 10W-30, 5W-30, 0W-30,
                    5W-20, 0W-20, and 0W-16 based on API Group II, Group III or Group IV. base oils and in conjunction
                    with API SN PLUS, API SN and Resource Savings Statement.
                </p>

                <h2 class="mb-5 mt-5">NEW APPROVALS API SP AND ILSAC GF-6A AND GF-6B</h2>
                <p class="mb-4">GF-6B - (current) Applicable only to oils with SAE viscosity grade 0W-16. Introduced May
                    2020, Designed to Provide Low RPM Premature Ignition (LSPI) Protection, Timing Chain Wear
                    Protection, High Temperature Piston and Turbocharger Deposits Protection, Strict Control of Sludge
                    and Sludge Formation, Improved Fuel Economy, Protection and Protection emission control systems.
                    engines fueled with ethanol fuels up to E85.
                </p>

                <p class="mb-4">GF-6A - (Released) Introduced May 2020, designed to provide protection against low rpm
                    premature ignition (LSPI), timing chain wear protection, improved piston and turbocharger protection
                    from high temperature deposits, tighter control of deposits and deposits. improved fuel economy,
                    improved emission control system. protection and protection of engines fueled with ethanol fuels up
                    to E85.
                </p>

                <p class="mb-4">The main differences between GF-6A and GF-6B are viscosity grade and high temperature
                    high shear viscosity. GF-6B oils will be as effective as GF-6A oils, but at the same time they will
                    need to have lower viscosity at high temperatures and high shear rate, which will lead to greater
                    fuel economy.
                </p>

                <p class="mb-4">This makes it possible to produce GF-6B oils of a lower viscosity grade than 0W-20. At
                    the same time, category GF-6A will be fully suitable for use in equipment requiring compliance with
                    earlier categories.
                    The new API engine oils standard ensures optimum performance of engine components, including
                    emission control systems and turbochargers. The new oils will help vehicles meet fuel economy
                    requirements while protecting engines fueled by ethanol up to E85. API SP oils are formulated to
                    provide protection against low speed pre-ignition (LSPI), a phenomenon common to turbocharged direct
                    injection (GDI) gasoline engines.
                </p>
                <img alt="card-image"
                     class="d-block img-responsive"
                     src={{asset("images/motor-engine-oil-info.png")}}
                >
            @elseif ($currentLanguage == 'ru' && $category->name_en == 'motor')
                <h2 class="mb-5"> МОТОРНОЕ МАСЛО: КЛАСС ILSAC GF-5
                </h2>
                <p class="mb-4">
                    Представлен в 2010 году. Масла стандарта GF-5 должны обеспечивать лучшую защиту поршней от
                    высокотемпературных отложений и лучшую защиту турбонагнетателей, иметь более высокую совместимость с
                    уплотняющими деталями двигателя, повышенную стойкость при использовании в двигателях на
                    этанол-содержащем бензине вплоть до E85. Также более строгие требования к шламообразованию. Масла
                    ILSAC GF-5 разработаны для повышения топливной экономичности и обеспечения улучшенных характеристик
                    в широком диапазоне областей, включая защиту поршней от высокотемпературных отложений, улучшенную
                    защиту от образования отложений в двигателе и защиту двигателей, работающих на этанолсодержащем
                    топливе до E85. чтобы показать, что масло создано для повышения топливной экономичности.
                </p>

                <p class="mb-4">
                    Масла, соответствующие требованиям ILSAC GF-5, по своим характеристикам превосходят масла,
                    соответствующие требованиям ILSAC GF-4 и более ранних версий, и могут эффективно смазывать
                    двигатели, соответствующие этим стандартам.
                </p>

                <p class="mb-4">
                    Масла, соответствующие ILSAC GF-5, обычно имеют низкий HTHS (≤ 3,5 сП) SAE 10W-30, 5W-30, 0W-30,
                    5W-20, 0W-20 и 0W-16 на основе API Group II, Group III или Group IV. базовые масла и в сочетании с
                    API SN PLUS, API SN и заявлением об экономии ресурсов.
                </p>

                <h2 class="mb-5 mt-5">НОВЫЕ ДОПУСКИ API SP И ILSAC GF-6A И GF-6B
                </h2>
                <p class="mb-4">
                    GF-6B — (актуальная) Применимо только к маслам, имеющим класс вязкости SAE 0W-16. Представлен в мае
                    2020 года, разработан для обеспечения защиты от преждевременного воспламенения на низких оборотах
                    (LSPI), защиты от износа цепи привода ГРМ, защиты от высокотемпературных отложений для поршней и
                    турбокомпрессоров, строгого контроля образования отложений и нагара, повышения экономии топлива,
                    защиты и защиты системы контроля выбросов. двигателей, работающих на этанолсодержащем топливе до
                    E85. </p>

                <p class="mb-4">
                    GF-6A — (актуальная) Представлен в мае 2020 года, предназначен для защиты от преждевременного
                    воспламенения на низких оборотах (LSPI), защиты от износа цепи привода ГРМ, улучшенной защиты
                    поршней и турбонагнетателей от высокотемпературных отложений, более строгого контроля образования
                    отложений и нагара, улучшенной экономии топлива, улучшенной системы контроля выбросов. защита и
                    защита двигателей, работающих на этанолсодержащих топливах до E85.
                </p>

                <p class="mb-4">
                    Основная разница между GF-6A и GF-6B заключается в показателях класса вязкости и высокотемпературной
                    вязкости при высокой скорости сдвига. Масла GF-6B по своей эффективности не будут уступать маслам
                    GF-6A, но при этом они должны будут иметь меньшую вязкость при высоких температурах и высокой
                    скорости сдвига, что и позволит добиться большей экономии топлива.
                </p>

                <p class="mb-4">
                    Это даёт возможность производить масла GF-6B меньшего класса вязкости, чем 0W-20. При этом,
                    категория GF-6A будет полностью пригодна для применения в оборудовании, требующем соответствия более
                    ранним категориям.
                </p>
                <p class="mb-4">
                    Новый стандарт API моторных масел обеспечивает оптимальную работу компонентов двигателя, включая
                    системы контроля выбросов и турбокомпрессоры. Новые масла помогут автомобилям соответствовать
                    требованиям экономии топлива, одновременно защищая двигатели, работающие на этаноле до E85. Масла
                    API SP разработаны для обеспечения защиты от низкоскоростного предварительного зажигания (LSPI),
                    явления, характерного для бензиновых двигателей с турбонаддувом и прямым впрыском (GDI).
                </p>
                <img alt="card-image"
                     class="d-block img-responsive"
                     src={{asset("images/motor-engine-oil-info.png")}}
                >
            @elseif ($currentLanguage == 'ru' && $category->name_en == 'transmission')

            @elseif ($currentLanguage == 'en' && $category->name_en == 'transmission')
            @endif


        </div>
    </div>
</div>
<!-- //blog section -->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

</div>
</div>
@endsection
@section('styles')
    <!-- Specific styles for the about page -->
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

@endsection


