<style>
    .f-video {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .f-video .container {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        padding-left: 50px;
        padding-right: 50px;
        margin-left: auto;
        margin-right: auto;
        max-width: 1400px;
    }

    .f-video-content {
        width: calc(40% - 50px);
    }

    .f-video-content h2 {
        margin: 0 0 18px;
    }

    .f-video-content p {
        max-width: 376px;
        margin: 0 0 36px;
    }

    .f-video-content p {
        max-width: 376px;
        margin: 0 0 36px;
    }

    .f-video-content p {
        max-width: 376px;
        margin: 0 0 36px;
    }

    .lp-socials {
        display: flex;
        flex-wrap: wrap;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    lp-socials>li:not(:last-child) {
        padding-right: 14px;
    }

    .lp-socials>li {
        flex-shrink: 0;
    }

    ol li,
    ul li {
        padding-left: 0;
    }

    .social_icons-style-1 a {
        border-color: rgba(0, 0, 0, 1) !important;
        background-color: rgba(0, 0, 0, 0) !important;
        color: rgba(0, 0, 0, 1) !important;
    }

    a:-webkit-any-link {
        text-decoration: none;
    }

    li :last-child {
        margin-bottom: 0;
    }

    .lp-socials__link {
        align-items: center;
        background-color: #fff;
        border: 1px solid;
        border-radius: 50%;
        color: inherit;
        cursor: pointer;
        display: flex;
        flex-shrink: 0;
        font-size: 18px;
        height: 40px;
        justify-content: center;
        padding: 5px;
        text-decoration: none;
        transition: all .2s;
        width: 40px;
    }

    .fadeInUp {
        animation-name: fadeInUp;
    }

    a {
        background-color: transparent;
        color: inherit;
        text-decoration: none;
    }

    a {
        -webkit-text-decoration-skip: objects;
        text-decoration: unset;
    }

    li :last-child {
        margin-bottom: 0;
    }

    .lp-i {
        display: inline-block;
        line-height: 1;
    }

    .lp-i--instagram:before {
        -webkit-mask-image: url('data:image/svg+xml;charset=utf-8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 448 512%27%3E%3Cpath d=%27M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141m0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7m146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8m76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8M398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1%27/%3E%3C/svg%3E');
        mask-image: url('data:image/svg+xml;charset=utf-8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 448 512%27%3E%3Cpath d=%27M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141m0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7m146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8m76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8M398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1%27/%3E%3C/svg%3E');
    }

    .lp-i:before {
        background-color: currentColor;
        background-size: cover;
        content: "";
        display: inline-block;
        height: 1em;
        -webkit-mask-position: center;
        mask-position: center;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-size: contain;
        mask-size: contain;
        vertical-align: top;
        width: 1em;
    }

    .f-video-poster {
        width: 60%;
        position: relative;
    }

    .social_icons-style-1 a svg,
    .social_icons-style-1 a svg path {
        fill: currentColor !important;
    }

    .lp-socials__link svg {
        max-width: 100%;
        transition: all .2s;
        fill: currentColor;
    }

    svg:not(:root) {
        overflow: hidden;
    }

    .social_icons-style-1 a svg,
    .social_icons-style-1 a svg path {
        fill: currentColor !important;
    }

    li :last-child {
        margin-bottom: 0;
    }

    .f-video-poster-bgr {
        padding: 27% 0;
        -webkit-background-size: cover;
        background-size: cover;
        -webkit-background-position: center;
        background-position: center;
        position: relative;
        text-align: center;
    }

    .f-video .play-btn {
        background: transparent;
        border: none;
        cursor: pointer;
        outline: none;
        padding: 0;
    }

    button {
        color: inherit;
        text-transform: uppercase;
    }

    .f-video .play-btn .play-btn-holder {
        width: 76px;
        height: 76px;
        border: 1px solid white;
        border-radius: 50%;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .f-video .play-btn .icon-wrapper {
        cursor: pointer;
        background-color: white;
        border-radius: 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 50px;
        height: 50px;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .f-video .play-btn .play-icon {
        font-size: 10px;
        -webkit-transform: translateX(1px);
        -moz-transform: translateX(1px);
        -ms-transform: translateX(1px);
        transform: translateX(1px);
        color: #000;
    }

    .lp-i {
        display: inline-block;
        line-height: 1;
    }

    .lp-i--play:before {
        -webkit-mask-image: url('data:image/svg+xml;charset=utf-8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 448 512%27%3E%3Cpath d=%27M424.4 214.7 72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6%27/%3E%3C/svg%3E');
        mask-image: url('data:image/svg+xml;charset=utf-8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 448 512%27%3E%3Cpath d=%27M424.4 214.7 72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6%27/%3E%3C/svg%3E');
    }

    .lp-i:before {
        background-color: currentColor;
        background-size: cover;
        content: "";
        display: inline-block;
        height: 1em;
        -webkit-mask-position: center;
        mask-position: center;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-size: contain;
        mask-size: contain;
        vertical-align: top;
        width: 1em;
    }

    :before {
        box-sizing: inherit;
    }

    .f-video .play-btn .play-icon {
        font-size: 10px;
        -webkit-transform: translateX(1px);
        -moz-transform: translateX(1px);
        -ms-transform: translateX(1px);
        transform: translateX(1px);
        color: #000;
    }

    .f-video .play-btn .icon-wrapper {
        cursor: pointer;
        background-color: white;
        border-radius: 50%;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 50px;
        height: 50px;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .f-video .play-btn {
        background: transparent;
        border: none;
        cursor: pointer;
        outline: none;
        padding: 0;
    }

    button {
        color: inherit;
        text-transform: uppercase;
    }

    .f-video__logo {
        position: absolute;
        width: 100px;
        left: 0;
        bottom: 0;
        -webkit-transform: translate(-30%, 40%);
        -moz-transform: translate(-30%, 40%);
        -ms-transform: translate(-30%, 40%);
        transform: translate(-30%, 40%);
    }

    .f-video__logo img {
        width: 100%;
        object-fit: cover;
    }

    img {
        border-style: none;
        max-width: 100%;
    }

    iframe,
    img {
        margin-bottom: 0;
    }

    img {
        margin: 0;
        padding: 0;
    }

    /* Modal Styling */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
        position: relative;
        padding: 15px;
        width: 80%;
        background-color: #fff;
        border-radius: 8px;
    }

    .modal iframe {
        width: 100%;
        height: 400px;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 20px;
        color: #000;
        font-size: 24px;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .f-video .container {
            flex-direction: column;
        }

        .f-video-content {
            margin-bottom: 14px;
            width: 78%;
            text-align: center !important;
        }

        .f-video-content p {
            max-width: 100%;
            margin: 0 0 36px;
            /* text-align: center !important; */
        }

        .f-video-poster {
            width: 100%;
            position: relative;
        }

        .lp-socials {
            /* display: flex;
            flex-wrap: wrap;
            list-style-type: none;
            margin: 0;
            padding: 0; */
            justify-content: center;
        }
    }
</style>


<section class="is-font-color-dark is-background-color-light">
    <div class="f-video">
        <div class="container" style="overflow: hidden;">
            <div class="f-video-content">
                <h2>Property Spotlight</h2>

                <p class="f-video-description">
                </p>
                <div id="ifv8">
                    <p>150 Charles Street, Unit 8AN</p>
                </div>
                <style>
                    * {
                        box-sizing: border-box;
                    }

                    body {
                        margin: 0;
                    }

                    ul {
                        list-style: inherit;
                    }
                </style>
                <p></p>

                <ul class="lp-socials social_icons-style-1">

                    <li>
                        <a href="https://www.instagram.com/philipscheinfeldteam/?hl=en" class="lp-socials__link socials__item wow fadeInUp" data-wow-delay="0s" target="_blank" aria-label="INSTAGRAM - open in a new tab" data-uw-rm-brl="PR" data-uw-original-href="https://www.instagram.com/philipscheinfeldteam/?hl=en" data-uw-rm-ext-link="" uw-rm-external-link-id="https://www.instagram.com/philipscheinfeldteam/?hl=en$instagram" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                            <span class="lp-i lp-i--instagram" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.compass.com/agents/the-philip-scheinfeld-team/" class="lp-socials__link socials__item wow fadeInUp" data-wow-delay="0.1s" target="_blank" aria-label="BROKERAGE - open in a new tab" data-uw-rm-brl="PR" data-uw-original-href="https://www.compass.com/agents/the-philip-scheinfeld-team/" data-uw-rm-ext-link="" uw-rm-external-link-id="https://www.compass.com/agents/the-philip-scheinfeld-team/$brokerage" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <svg width="20" height="20" viewBox="0 0 60.14 60">
                                <path d="M29.86 0a30 30 0 00.28 60 30.03 30.03 0 0030-30A30 30 0 0029.86 0zm.28 8a22.03 22.03 0 0122 22 22 22 0 11-22-22zm7.18 9.17l-20 20 5.65 5.66 20-20z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="f-video-poster">
                <div class="f-video-poster-bgr" style="background-image: url('https://res.cloudinary.com/luxuryp/images/w_1920,c_limit,f_auto,q_auto/peb2mxyzgj4tum30ikau/8_high-res')">
                    <button data-type="VIDEO" id="play-btn" class="play-btn" data-src="https://drive.google.com/file/d/1UKF5WkqoLqCd9CmMRCpQN9dhya98vAOW/preview" aria-label="button" data-uw-rm-empty-ctrl="">
                        <div class="play-btn-holder">
                            <div class="icon-wrapper">
                                <i class="lp-i lp-i--play play-icon"></i>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="f-video__logo">
                    <img src="https://res.cloudinary.com/luxuryp/images/w_1920,c_limit,f_auto,q_auto/ps5l1v8nzdgy6gzfoqnl/ps_logo__monogram_black-copy-2-3" alt="Property Spotlight" loading="lazy" data-uw-rm-alt-original="" data-uw-rm-alt="CT">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal for Popup Video -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <iframe id="videoPlayer" src="" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<script>
    debugger
    // Select Elements
    const playButton = document.getElementById('play-btn');
    const modal = document.getElementById('videoModal');
    const closeBtn = modal.querySelector('.close-btn');
    const videoPlayer = document.getElementById('videoPlayer');

    // Add Event Listener to Play Button
    playButton.addEventListener('click', () => {
        debugger
        const videoSrc = playButton.getAttribute('data-src');
        videoPlayer.src = videoSrc;
        modal.style.display = 'block';
    });

    // Close the Modal
    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
        videoPlayer.src = ''; // Stop the video
    });

    // Close Modal on Outside Click
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
            videoPlayer.src = ''; // Stop the video
        }
    });
</script>