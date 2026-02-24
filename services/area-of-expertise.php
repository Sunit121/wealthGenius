<?php
// Always define services here
$services = [
    [
        'id' => 'financial',
        'title' => 'Financial<br>Planning',
        'image' => 'service-1.webp',
        'link' => $base_url . 'services/financial-planning/introduction-to-financial-planning.php'
    ],
    [
        'id' => 'retirement',
        'title' => 'Retirement Planning',
        'image' => 'service-2.webp',
        'link' => $base_url . 'services/retirement-planning.php'
    ],
    [
        'id' => 'savings',
        'title' => 'Savings',
        'image' => 'service-3.webp',
        'link' => $base_url . 'services/savings-and-investments.php'
    ],
    [
        'id' => 'taxation',
        'title' => 'Income Tax',
        'image' => 'service-4.webp',
        'link' => $base_url . 'services/taxation/income-tax.php'
    ],
    [
        'id' => 'investment',
        'title' => 'Investment',
        'image' => 'service-5.webp',
        'link' => $base_url . 'services/investment.php'
    ],
    [
        'id' => 'protection',
        'title' => 'Protection',
        'image' => 'service-6.webp',
        'link' => $base_url . 'services/protection.php'
    ],

    [
        'id' => 'saving',
        'title' => 'savings',
        'image' => 'service-7.webp',
        'link' => $base_url . 'services/savings/introduction-to-savings-and-investments.php'
    ],
    
];
?>

<div class="service_grid_main">
    <?php foreach ($services as $service): ?>
        <div class="service_grid" data-service="<?= $service['id'] ?>">
            <a href="<?= $service['link'] ?>">
                <img src="<?= $base_url ?>assets/images/services/<?= $service['image'] ?>" alt="">
                <div class="service-text">
                    <h3><?= $service['title'] ?></h3>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {

    const pageServiceMap = {
        "introduction-to-financial-planning": ["taxation", "investment"],
        "financial-planning": ["taxation", "investment"],
        "retirement-planning": ["investment", "savings"],
        "income-tax": [ "savings", "investment"],
        "introduction-to-savings-and-investments": [ "savings", "investment"],
        "capital-investment-bonds": ["investment", "taxation", "saving"],
        "national-savings-products": ["investment", "taxation", "saving"],
        "junior-isas": ["investment", "taxation", "saving"],
        "isas": ["investment", "taxation"],
        "equities": ["investment", "taxation", "saving"], 
        "endowments": ["investment", "taxation", "saving"],
        "collective-investments": ["investment", "taxation", "saving"],
        "unit-trusts": ["investment", "taxation", "saving"],
        "open-ended-investment-companies": ["investment", "taxation", "saving"],
         "relationship-management": ["investment", "taxation"],  
        "introduction-to-wealth-management": ["investment", "taxation"], 
         "wg-retirement-protection": ["investment", "taxation"],
         "why-protection-is-important": ["investment", "taxation"],
          "life-assurance": ["investment", "taxation"], 
          "critical-illness": ["investment", "taxation"],
          "family-income-benefit": ["investment", "taxation"],
          "income-protection": ["investment", "taxation"],     
          "private-medical": ["investment", "taxation"],
          "introduction-to-business-insurance": ["investment", "taxation"],
          "income-protection-insurance": ["investment", "taxation"],
          "employers-liability-insurance": ["investment", "taxation"],
          "directors-and-staff-benefits": ["investment", "taxation"],
          "share-protection": ["investment", "taxation"],
          "keyperson-insurance": ["investment", "taxation"],
          "wg-our-approach": ["taxation", "investment", "saving"],
          "wg-join-our-seminar-or-webinar": ["taxation", "investment", "saving"],
          "capital-gains-tax": ["taxation", "investment", "saving"],
          "introduction-to-taxation": ["taxation", "investment", "saving"],
    };

    const page = location.pathname
        .split('/')
        .filter(Boolean)
        .pop()
        .replace('.php', '');

    console.log('Current page:', page);

    if (!pageServiceMap[page]) {
        console.log('No mapping found for page');
        return;
    }

    document.querySelectorAll('.service_grid').forEach(card => {
        const serviceId = card.dataset.service;

        if (!serviceId) return;

        if (!pageServiceMap[page].includes(serviceId)) {
            card.style.display = 'none';
        }
    });

});
</script>

