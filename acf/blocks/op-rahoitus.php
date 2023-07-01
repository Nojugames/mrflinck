<?php


// Create id attribute allowing for custom "anchor" value.
$id = 'block-op-rahoitus-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-op-rahoitus';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid p-0">
    <div id="op-keti-init-content"></div>
    <style>
        .op-keti__container {
            margin: 1rem auto !important;
        }
        .op-keti__container footer {
            background: white;
        }
        .op-keti__container footer p {
            color: black;
        }
    </style>
    <script type="text/javascript">
        window.__opCalcAccount = window.__opCalcAccount ? window.__opCalcAccount : { "mode": "kertaluotto-uusi", "key": "kantaputki" };
        window.__opCalcOpts = window.__opCalcOpts && Object.keys(window.__opCalcOpts).length ? window.__opCalcOpts : [];
        window.__opCalcOpts["content"] = { "linkCta": "https://eficode.pohjola-finance.fi/kertaluotto-uusi/kantaputki", "linkMore": "", "name": "Firmanen", "heading": "Rahoituksen määrä", "colorPrimary": "#ff6a10", "colorSecondary": "#ffffff", "textOpenBtn": "Maksa erissä", "percentage": [0.012, 0.017, 0.021, 0.028, 0.033, 0.05, 0.09], "enableInputChanges": true, "showCta": true, "type": "content", showInfo:{realInterest:true,interestMargin:true,paybackTime:true,costEstimate:true}, texts:{ctaButton:"Tutustu ja hae",inputAmountLabel:"Rahoituksen määrä",teaser:"Maksa 1 kk päästä toimituksesta ...",floating:{openButton:"Maksa erissä"},product:{openButtonTextStart:"Tai",openButtonTextEnd:"rahoituksella."}}}
    </script>
</div>