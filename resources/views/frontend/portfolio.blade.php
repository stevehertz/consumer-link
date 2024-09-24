@extends('frontend.layouts.app')

@section('title', 'Portfolio - ' . config('app.name'))

@section('content')


    <style type="text/css">
        #gallery-1 {
            margin: auto;
        }

        #gallery-1 .gallery-item {
            float: left;
            margin-top: 10px;
            text-align: center;
            width: 33%;
        }

        #gallery-1 img {
            border: 2px solid #cfcfcf;
        }

        #gallery-1 .gallery-caption {
            margin-left: 0;
        }

        /* see gallery_shortcode() in wp-includes/media.php */
    </style>
    <div id="gallery-1" class="gallery galleryid-434 gallery-columns-3 gallery-size-thumbnail">
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/Aquafresh-Yaya-In-22.10.2014.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/Aquafresh-Yaya-In-22.10.2014-150x150.jpg"
                        class="attachment-thumbnail" alt="Billboard" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Billboard
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/CFC-Muthiaga-Dip-In-06.08.2014.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/CFC-Muthiaga-Dip-In-06.08.2014-150x150.jpg"
                        class="attachment-thumbnail" alt="Billboard" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Billboard
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/DSC_0008-2.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/DSC_0008-2-150x150.jpg"
                        class="attachment-thumbnail" alt="Billboard" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Billboard
            </dd>
        </dl><br style="clear: both" />
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/DSC_0013-2.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/DSC_0013-2-150x150.jpg"
                        class="attachment-thumbnail" alt="Billboard" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Billboard
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/DSC_0017.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/DSC_0017-150x150.jpg"
                        class="attachment-thumbnail" alt="Billboard" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Billboard
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/Hino-Mbs-rd-ICC-in-27.06.2014.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/Hino-Mbs-rd-ICC-in-27.06.2014-150x150.jpg"
                        class="attachment-thumbnail" alt="Billboard" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Billboard
            </dd>
        </dl><br style="clear: both" />
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/Agro-Africa-Nazareen-University-05.04.2011.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/Agro-Africa-Nazareen-University-05.04.2011-150x150.jpg"
                        class="attachment-thumbnail" alt="Hoarding" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Hoarding
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/Airtel-Ngara-Opp-Fig-Tree-Out-22.10.2014.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/Airtel-Ngara-Opp-Fig-Tree-Out-22.10.2014-150x150.jpg"
                        class="attachment-thumbnail" alt="Skysign" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Skysign
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/CMC-Ford-visuals-along-Nairobi-Nakuru-Highway-Outbound.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/CMC-Ford-visuals-along-Nairobi-Nakuru-Highway-Outbound-150x150.jpg"
                        class="attachment-thumbnail" alt="Bridge Sign" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Bridge Sign
            </dd>
        </dl><br style="clear: both" />
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/KAPS-branding-3.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/KAPS-branding-3-150x150.jpg"
                        class="attachment-thumbnail" alt="Branding" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Branding
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/LUX-Paramount-Plaza-Out-01.08.2014.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/LUX-Paramount-Plaza-Out-01.08.2014-150x150.jpg"
                        class="attachment-thumbnail" alt="Skysign" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Skysign
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/Odeon.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/Odeon-150x150.jpg"
                        class="attachment-thumbnail" alt="Hoarding" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Hoarding
            </dd>
        </dl><br style="clear: both" />
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/Village-Mkt-3.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/Village-Mkt-3-150x150.jpg"
                        class="attachment-thumbnail" alt="Branding" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Branding
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon portrait">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/Biselex-South-B-b.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/Biselex-South-B-b-150x150.jpg"
                        class="attachment-thumbnail" alt="Sub Urban Sign" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Sub Urban Sign
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/Coke-Studio-Hazina-Towers-25.08.2014.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/Coke-Studio-Hazina-Towers-25.08.2014-150x150.jpg"
                        class="attachment-thumbnail" alt="Wallwrap" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Wallwrap
            </dd>
        </dl><br style="clear: both" />
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/DSC_0009-2.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/DSC_0009-2-150x150.jpg"
                        class="attachment-thumbnail" alt="Wallwrap" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Wallwrap
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/DSC_0104.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/DSC_0104-150x150.jpg"
                        class="attachment-thumbnail" alt="Skysign" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Skysign
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/Jubilee.Transnational-House.27.0202014.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/Jubilee.Transnational-House.27.0202014-150x150.jpg"
                        class="attachment-thumbnail" alt="Wallwrap" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Wallwrap
            </dd>
        </dl><br style="clear: both" />
        <dl class="gallery-item">
            <dt class="gallery-icon portrait">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/Metropolitan-Hospital-Ltd-1.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/Metropolitan-Hospital-Ltd-1-150x150.jpg"
                        class="attachment-thumbnail" alt="Sub Urban Sign" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Sub Urban Sign
            </dd>
        </dl>
        <dl class="gallery-item">
            <dt class="gallery-icon landscape">
                <a
                    href="https://web.archive.org/web/20240415220738/http://consumerlink.co.ke/wp-content/uploads/2014/09/UNDER-CANOPY-II.jpg"><img
                        width="150" height="150"
                        src="https://web.archive.org/web/20240415220738im_/http://consumerlink.co.ke/wp-content/uploads/2014/09/UNDER-CANOPY-II-150x150.jpg"
                        class="attachment-thumbnail" alt="Under Canopy Signage" /></a>
            </dt>
            <dd class="wp-caption-text gallery-caption">
                Under Canopy Signage
            </dd>
        </dl>
        <br style="clear: both" />
    </div>
@endsection
