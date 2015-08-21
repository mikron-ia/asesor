<?php

/*
 * Subjects to give opinion about
 * Example values are pulled from my Eclipse Phase game
 */
$subjects = [
    "sourceCredibility" => [
        "short" => "Source credibility",
        "long" => "How trustworthy is the source in general - based on reputation, recommendation, and past work",
        "category" => "general",
        "ID" => 1,
    ],
    "deceitProbability" => [
        "short" => "Probability of deceit",
        "long" => "Likeness that task data are incomplete or defective",
        "category" => "general",
        "ID" => 2,
    ],
    "trapProbability" => [
        "short" => "Probability of trap",
        "long" => "Likeness that the mission itself will be a trap",
        "category" => "general",
        "ID" => 3,
    ],
    "assetProfit" => [
        "short" => "Profitability in assets",
        "long" => "Possible material gain - both in currency and resources",
        "category" => "general",
        "ID" => 4,
    ],
    "assetDanger" => [
        "short" => "Danger to assets",
        "long" => "Threat to owned assets. This is relevant mainly in project or criminal activity. May include equipment, sometimes morph.",
        "category" => "general",
        "ID" => 6,
    ],
    "assetInvestment" => [
        "short" => "Required investment of assets",
        "long" => "Amount of resources necessary to invest in success of the task",
        "category" => "general",
        "ID" => 13,
    ],
    "repPrimeProfit" => [
        "short" => "Profitability in relevant reputations",
        "long" => "Potential increase in I cat reputations",
        "category" => "general",
        "ID" => 5,
    ],
    "repOtherProfit" => [
        "short" => "Profitability in less relevant reputations",
        "long" => "Potential increase in lower class reputations",
        "category" => "general",
        "ID" => 15,
    ],
    "repPrimeDanger" => [
        "short" => "Danger to relevant reputations",
        "long" => "Potential decrease in I cat reputations",
        "category" => "general",
        "ID" => 7,
    ],
    "repOtherDanger" => [
        "short" => "Danger to less relevant reputations",
        "long" => "Potential decrese in lower class reputations",
        "category" => "general",
        "ID" => 16,
    ],
    "repInvest" => [
        "short" => "Required investment in reputations",
        "long" => "Amount of favours needed to begin the task safely",
        "category" => "general",
        "ID" => 14,
    ],
    "goalProfit" => [
        "short" => "Profitability to personal goals",
        "long" => "Will this goal benefit personal goals and motivations?",
        "category" => "general",
        "ID" => 18,
    ],
    "goalDanger" => [
        "short" => "Danger to personal goals",
        "long" => "Will this goal endanger personal goals and motivations?",
        "category" => "general",
        "ID" => 19,
    ],
    "bodyDanger" => [
        "short" => "Danger to body",
        "long" => "Direct threat of body damage",
        "category" => "general",
        "ID" => 8,
    ],
    "mindDanger" => [
        "short" => "Danger to mind",
        "long" => "Threat level to sanity",
        "category" => "general",
        "ID" => 9,
    ],
    "attentionReq" => [
        "short" => "Required level of attention",
        "long" => "How much of participator's time during the task will have to be dedicated to the direct work on the task",
        "category" => "general",
        "ID" => 11,
    ],
    "prepTime" => [
        "short" => "Required preparation time",
        "long" => "How much time would have to be spent on the preparations beforehand?",
        "category" => "time",
        "ID" => 17,
    ],
    "duration" => [
        "short" => "Duration",
        "long" => "Task duration",
        "category" => "time",
        "ID" => 10,
    ],
    "Recommendation" => [
        "short" => "Recommendation",
        "long" => "Final recommendation of the muse",
        "category" => "recommendation",
        "ID" => 12,
    ],
];

$grade = [
    "generic" => [
        "Unknown",
        "Negligible",
        "Extremely low",
        "Very low",
        "Low",
        "Moderately low",
        "Moderate",
        "Moderately high",
        "High",
        "Very high",
        "Extremely high",
    ],
    "time" => [
        "Unknown",
        "Less than 1h",
        "1h - 12h",
        "12h - 48h",
        "2d - 7d",
        "8d - 21d",
        "22d - 2 months",
        "2 months - 6 months",
        "0.5a - 2a",
        "2a - 5a",
        "5a+",
    ],
    "recommendation" => [
        "Not computable",
        "Do not consider",
        "Highly discouraged",
        "Discouraged",
        "Lightly discouraged",
        "Not recommended",
        "Undecided",
        "Recommended",
        "Highly recommended",
        "Advisable",
        "Highly advisable",
    ],
];
