#!/usr/bin/env bash

if [[ "$1" == "sales" ]]; then
    declare -A salesforce_objects=(
        ["Account"]=""
        ["AccountContactRole"]=""
        ["Asset"]=""
        ["Campaign"]=""
        ["CampaignMember"]=""
        ["Contact"]=""
        ["Contract"]=""
        ["ContractContactRole"]=""
        ["Lead"]=""
        ["LeadStatus"]=""
        ["Opportunity"]=""
        ["OpportunityCompetitor"]=""
        ["OpportunityContactRole"]=""
        ["OpportunityStage"]=""
        ["Order"]=""
        ["Partner"]=""
        ["PartnerRole"]=""
        ["Quote"]=""
    )
    model_dir="./src/Models/Sales"

    for object_api_name in "${!salesforce_objects[@]}"; do
        object_class_name="${salesforce_objects[$object_api_name]}"
        if [[ -z "$object_class_name" ]]; then
            object_class_name="$object_api_name"
        fi
        printf 'Generating model %s for object %s\n' "$object_class_name" "$object_api_name"
        php ./artisan salesforce:generate-model -N 'CNSDose\Salesforce\Models\Sales' -C "$object_class_name" "$object_api_name" > "$model_dir/$object_class_name.php"
    done
fi

if [[ "$1" == "support" ]]; then
    declare -A salesforce_objects=(
        ["Case"]="SupportCase"
        ["CaseArticle"]=""
        ["CaseComment"]=""
        ["CaseHistory"]=""
        ["CaseMilestone"]=""
        ["CaseSolution"]=""
        ["CaseStatus"]=""
        ["CategoryData"]=""
        ["CategoryNode"]=""
        ["Contact"]=""
        ["ContractLineItem"]=""
        ["EmailMessage"]=""
        ["Entitlement"]=""
        ["EntitlementContact"]=""
        ["FeedComment"]=""
        ["FeedPost"]=""
        ["KnowledgeArticle"]=""
        ["KnowledgeArticleVersion"]=""
        ["KnowledgeArticleViewStat"]=""
        ["KnowledgeArticleVoteStat"]=""
        ["NewsFeed"]=""
        ["SelfServiceUser"]=""
        ["ServiceContract"]=""
        ["Solution"]=""
        ["SolutionStatus"]=""
        ["UserProfileFeed"]=""
        ["Vote"]=""
    )
    model_dir="./src/Models/Support"

    for object_api_name in "${!salesforce_objects[@]}"; do
        object_class_name="${salesforce_objects[$object_api_name]}"
        if [[ -z "$object_class_name" ]]; then
            object_class_name="$object_api_name"
        fi
        printf 'Generating model %s for object %s\n' "$object_class_name" "$object_api_name"
        php ./artisan salesforce:generate-model -N 'CNSDose\Salesforce\Models\Support' -C "$object_class_name" "$object_api_name" > "$model_dir/$object_class_name.php"
    done
fi
