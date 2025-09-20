
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    {{-- <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet"> --}}
<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/selectbox.css?v=1758384373">
<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/investors-common.css?v=1758384373">
<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/reports.css?v=1758384373">
@endpush
@section('content')
     <section class="topspace133 fw">&nbsp;</section>

    <section class="title_desc_left" id="heading_pages_title_nobanner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="fw">
                        <h1 class="blk page_title txc">Listing <br>Compliance</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fw h100 h40m">&nbsp;</section>
    <section class="title_desc_left">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="fwp file_downloaded">
                        <div class="fw h30 h20m">&nbsp;</div>
                        <h4 class="pd pdm txcm">Disclosures under Regulation 46 of the SEBI Listing Regulations</h4>
                    </div>
                    <div class="row">                   
                        <div class="fw section_reports static_div" id="Regulation_46">
                            <h6><a href="https://www.godrejindustries.com/public/pdfs/regulations/Reg_46_Disclosures_Aug_2025.pdf" target="_blank">Disclosures<img src="https://www.godrejindustries.com/public/images/download.png" alt="Download File" width="40"></a></h6>
                        </div>
                    </div>
                </div>
                <div class="fw seperator visible-xs">&nbsp;</div>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="fwp file_downloaded">
                        <div class="fw h30">&nbsp;</div>
                        <h4 class="pdm pd txcm">Disclosures under Regulation 62 of the SEBI Listing Regulations</h4>
                    </div>
                    <div class="row">                   
                        <div class="fw section_reports static_div" id="Regulation_62">
                            <h6><a href="https://www.godrejindustries.com/public/pdfs/regulations/Reg_62_Disclosures_Aug_2025.pdf" target="_blank">Disclosures<img src="https://www.godrejindustries.com/public/images/download.png" alt="Download File" width="40"></a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fw seperator">&nbsp;</section>
    <section class="title_desc_left">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="fwp file_downloaded">
                        <div class="fw h30 h20m">&nbsp;</div>
                        <h4 class="pd pdm txcm">Listing Compliance</h4>
                        <div class="fw h50">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <select class="required investors_selectbox sef_year listing_compliance" data-category="listing_compliance">
                                                                <option value="2025-26">2025-26</option>
                                                                <option value="2024-25">2024-25</option>
                                                                <option value="2023-24">2023-24</option>
                                                                <option value="2022-23">2022-23</option>
                                                                <option value="2021-22">2021-22</option>
                                                                <option value="2020-21">2020-21</option>
                                                                <option value="2019-20">2019-20</option>
                                                                <option value="2018-19">2018-19</option>
                                                                <option value="2017-18">2017-18</option>
                                                                <option value="2016-17">2016-17</option>
                                                                <option value="2015-16">2015-16</option>
                                                            </select>
                        </div>
                        <div class="fw visible-xs h20">&nbsp;</div>
                        <div class="col-md-6 col-xs-12">
                            <select class="required investors_selectbox sef_month listing_compliance" data-category="listing_compliance">
                                <option value="">Month</option>
                                                                <option value="April">April</option>
                                                                <option value="May">May</option>
                                                                <option value="June">June</option>
                                                                <option value="July">July</option>
                                                                <option value="August">August</option>
                                                                <option value="September">September</option>
                                                            </select>
                        </div>
                    </div>
                    <div class="fw h30">&nbsp;</div>
                    <div class="row">                   
                        <div class="fw section_reports" id="listing_complianceList">
                            <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/NSEBSENEWSPAPERRE_LODGEMENT17092025.pdf" target="_blank">Newspaper Advertisement regarding Special Window for Re-lodgment of Transfer Requests of Physical Shares<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEKIDAPPROVAL16092025.pdf" target="_blank">Approval of Key Information Document for Issue of Unsecured Non-Convertible Debentures up to Rs. 800 Crore<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/NSEBSENEWSPAPER100DAYSCAMPAIGN12092025.pdf" target="_blank">Intimation regarding 100 Days Campaign- &quot;Saksham Niveshak&quot;<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/IntimationtoShareholders_PhysicalholdersFinalDraft.pdf" target="_blank">Intimation to Shareholders holding shares in Physical Form<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/NSEBSENEWSPAPER26082025.pdf" target="_blank">Newspaper Advertisement of Postal Ballot Notice dated August 13, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/PostalBallotNoticedatedAugust132025.pdf" target="_blank">Postal Ballot Notice dated August 13, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/JUNE302025NPFINANCIALS.pdf" target="_blank">Newspaper Publication of Results for Quarter ended June 30, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEVOTINGRESULTS2025.pdf" target="_blank">Scrutinizer’s Report and Voting Results of the Annual General Meeting held on August 13, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEAGMOUTCOMEAUG2025.pdf" target="_blank">Proceedings of the 37th Annual General Meeting held on August 13, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEFULLOUTCOME13082025.pdf" target="_blank">Outcome of Board Meeting held on August 13, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BMNOTICEBSENSE13082025.pdf" target="_blank">Notice of Board Meeting to be held on August 13, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSECLARIFICATION04082025Signed.pdf" target="_blank">Intimation under Regulations 30 and 51 of the SEBI (LODR) Regulations, 2015 – Clarification for the information circulating in the news articles<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/IGREPORTJUNE302025.pdf" target="_blank">Statement of Investor Complaints for Quater ended June 30, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/2.NSEBSENONEMAILLETTER19072025.pdf" target="_blank">Issuance of Letters to Shareholders under Regulation 36(1)(b) of SEBI (Listing Obligation and Disclosure Requirements) Regulations, 2015<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/NSEBSE-NEWSPAPER-19-07-2025.pdf" target="_blank">Newspaper Advertisement for information the Members about dispatch of Notice of the 37th Annual General Meeting and Annual Report for the Financial Year ended March 31, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEPREAGMNOTICEJULY2025.pdf" target="_blank">Newspaper Advertisement for information regarding the 37th (Thirty Seventh) Annual General Meeting to be held through Video Conferencing / Other Audio Visual Means<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEPRESSRELEASEJULY32025.pdf" target="_blank">Press release: Godrej Industries’ Chemicals Business to Invest over INR 750 CR for Capacity Expansion<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEESOPJULY2025.pdf" target="_blank">Intimation of Allotment of 51,048 Equity Shares under ESGS 2011<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEIntimationtoSEGCLFurtherinvestment.pdf" target="_blank">Update on further acquisition of shares of Godrej Capital Limited, Subsidiary Company<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/ClosureofTradingWindow30062025.pdf" target="_blank">Intimation of Closure of Trading Window – June 30, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEIEPFNEWSPAPERAD2025.pdf" target="_blank">Newspaper Advertisement regarding transfer of Equity Shares of the Company to Investor Education and Protection Fund<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/GIL_ASCR_2025.pdf" target="_blank">Annual Secretarial Compliance Report for the Financial Year ended March 31, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/NewspaperPublicationMarch2025.pdf" target="_blank">Newspaper Publication of Results for Quarter ended March 31, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/RPTMarch2025.pdf" target="_blank">Disclosure of Related Party Transactions pursuant to Regulation 23(9) of SEBI (LODR) Regulations, 2015, for the half year ended March 31, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEFULLOUTCOME.pdf" target="_blank">Outcome of Board Meeting held on May 15, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/OutcomeNRC15052025.pdf" target="_blank">Intimation under Regulation 30 of SEBI (LODR) Regulations, 2015 – Update on Godrej Industries Limited – Employee Stock Grant Scheme, 2011<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BMNOTICEBSENSE15052025.pdf" target="_blank">Notice of Board Meeting to be held on May 15, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSENCDAllotmentMay62025.pdf" target="_blank">Allotment of Unsecured Non-Convertible Debentures of Rs. 1,000 Crore<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/GIL_InvestorGrievance_Website_March312025.pdf" target="_blank">Statement of Investor Complaints for Quarter ended March 31, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEKID29APRIL2025.pdf" target="_blank">Approval of Key Information Document for Issue of Unsecured Non-Convertible Debenture up to Rs. 1000 Crore<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/listing_compliance/BSENSEPRESSRELEASEAPRIL142025REVISED.pdf" target="_blank">Press Release: Completion of acquisition of the Food Additives Business from Savannah Surfactants Limited (Goa)<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                    </div>
    </div>
                        </div>
                    </div>
                </div>
                <div class="fw seperator visible-xs">&nbsp;</div>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="fwp file_downloaded">
                        <div class="fw h30">&nbsp;</div>
                        <h4 class="pdm pd txcm">Corporate Governance Report</h4>
                        <div class="fw h50">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <select class="required investors_selectbox sef_year corporate_governance" data-category="corporate_governance">
                                                                <option value="2024-25">2024-25</option>
                                                                <option value="2023-24">2023-24</option>
                                                                <option value="2022-23">2022-23</option>
                                                                <option value="2021-22">2021-22</option>
                                                                <option value="2020-21">2020-21</option>
                                                                <option value="2019-20">2019-20</option>
                                                                <option value="2018-19">2018-19</option>
                                                                <option value="2017-18">2017-18</option>
                                                                <option value="2016-17">2016-17</option>
                                                                <option value="2015-16">2015-16</option>
                                                                <option value="2014-15">2014-15</option>
                                                                <option value="2013-14">2013-14</option>
                                                                <option value="2012-13">2012-13</option>
                                                                <option value="2011-12">2011-12</option>
                                                                <option value="2010-11">2010-11</option>
                                                            </select>
                        </div>
                        <div class="fw h20 visible-xs">&nbsp;</div>
                        <div class="col-md-6 col-xs-12">
                            <select class="required investors_selectbox sef_month corporate_governance" data-category="corporate_governance">
                                <option value="">Month</option>
                                                                <option value="January">January</option>
                                                                <option value="April">April</option>
                                                                <option value="July">July</option>
                                                                <option value="October">October</option>
                                                            </select>
                        </div>
                    </div>
                    <div class="fw h30">&nbsp;</div>
                    <div class="row">                   
                        <div class="fw section_reports" id="corporate_governanceList">
                            <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/corporate_governance/IntegratedGovernance30062025website.pdf" target="_blank">Integrated Corporate Governance Report as on 30th June, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/corporate_governance/IntegratedCG31032025withoutPAN.pdf" target="_blank">Integrated Corporate Governance Report as on 31st March, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/corporate_governance/IntegratedCorporateGovernanceReportason31stDec2024.pdf" target="_blank">Integrated Corporate Governance Report as on 31st December, 2024<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/corporate_governance/CorporateGovernanceReportason31stDec2024.pdf" target="_blank">Corporate Governance Report as on 31st December, 2024<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/corporate_governance/CGReport30Sep2024.pdf" target="_blank">Corporate Governance Report as on 30th September, 2024<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/corporate_governance/CGREPORTJUNE302024.pdf" target="_blank">Corporate Governance Report as on 30th June, 2024<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                    </div>
    </div>
                        </div>
                    </div>
                </div>



                <div class="fw seperator visible-xs">&nbsp;</div>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="fwp file_downloaded">
                        <div class="fw h30">&nbsp;</div>
                        <h4 class="pdm pd txcm">Debt Listing Compliance</h4>
                        <div class="fw h50">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <select class="required investors_selectbox sef_year debt_listing_compliance" data-category="debt_listing_compliance">
                                                                <option value="2025-26">2025-26</option>
                                                                <option value="2024-25">2024-25</option>
                                                                <option value="2023-24">2023-24</option>
                                                                <option value="2022-23">2022-23</option>
                                                                <option value="2021-22">2021-22</option>
                                                                <option value="2020-21">2020-21</option>
                                                            </select>
                        </div>
                        <div class="fw h20 visible-xs">&nbsp;</div>
                        <div class="col-md-6 col-xs-12">
                            <select class="required investors_selectbox sef_month debt_listing_compliance" data-category="debt_listing_compliance">
                                <option value="">Month</option>
                                                                <option value="April">April</option>
                                                                <option value="May">May</option>
                                                                <option value="July">July</option>
                                                                <option value="August">August</option>
                                                                <option value="September">September</option>
                                                            </select>
                        </div>
                    </div>
                    <div class="fw h30">&nbsp;</div>
                    <div class="row">                   
                        <div class="fw section_reports" id="debt_listing_complianceList">
                            <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/debt_listing_compliance/IntimationofRecordDateforNCDOcttoDec2025.pdf" target="_blank">Intimation of Record Date for Payment of Interest and Redemption of NCD – November and December 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/debt_listing_compliance/PaymentforNCDinterest29082025.pdf" target="_blank">Interest Payment on NCD – August 29, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/debt_listing_compliance/GILNSE527JUNE302025.pdf" target="_blank">Statement of Deviation under Reg. 52(7) of SEBI (LODR) Regulations, 2015 for the Quarter ended June 30, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/debt_listing_compliance/SignedIntimationofRecordDateJulytoSep2025.pdf" target="_blank">Intimation of Record Date for Payment of Interest on NCD – August and September 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/debt_listing_compliance/SignedPaymentforNCDinterest22052025.pdf" target="_blank">Intimation of Interest Payment on NCD – May 22, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/debt_listing_compliance/NSE527March312025.pdf" target="_blank">Statement of Deviation under Reg. 52(7) of SEBI (LODR) Regulations, 2015 for Quarter ended March 31, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/debt_listing_compliance/PaymentforNCDPrincipal&amp;Interest14052025.pdf" target="_blank">Intimation of Redemption and Interest Payment on NCD – May 14, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/debt_listing_compliance/AnnexXIVB31032025Final.pdf" target="_blank">Annexure – XIV B for the Financial Year ended March 31, 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/debt_listing_compliance/SEBI_Compliance_ISIN_March_2025.pdf" target="_blank">SEBI Compliance for ISIN for Half Year ended March 2025<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                    </div>
    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fw seperator">&nbsp;</section>

    <section class="title_desc_left">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="fwp file_downloaded">
                        <div class="fw h30">&nbsp;</div>
                        <h4 class="pd pdm txcm">Credit Ratings</h4>
                        <!-- <div class="fw h50">&nbsp;</div> -->
                    </div>
                    
                    <!-- <div class="fw h30">&nbsp;</div> -->
                    <div class="row">
                        <div class="fw section_reports" id="credit_ratingsList">
                            <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/credit_ratings/CreditRatings_November2024.pdf" target="_blank">Credit Ratings – November 2024<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                    </div>
    </div>
                        </div>
                    </div>
                </div>  
                <section class="fw seperator visible-xs">&nbsp;</section>
                <div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="fwp file_downloaded">
                        <div class="fw h30">&nbsp;</div>
                        <h4 class="pdm pd txcm">Policies and Codes</h4>
                        <!-- <div class="fw h50">&nbsp;</div> -->
                    </div>
                    
                    <!-- <div class="fw h30">&nbsp;</div> -->
                    <div class="row">                   
                        <div class="fw section_reports" id="policies_and_codesList">
                            <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/RolesandResponsiblitiesofIndependentDirectors.pdf" target="_blank">Roles and Responsiblities of Independent Directors<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/PolicyondeterminingmaterialityofeventsFeb2025website.pdf" target="_blank">Policy on determination of materiality of events<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/RPTPolicyFeb2025Website.pdf" target="_blank">Policy on Materiality of Related Party Transaction and Dealing with Related Party Transaction<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/RiskManagementPolicy_09072019.pdf" target="_blank">Risk Management Policy<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/DividendDistributionPolicy_09072019.pdf" target="_blank">Dividend Distribution Policy<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/PolicyonPreservationofDocuments_10072019.pdf" target="_blank">Policy on Preservation of Documents<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/ArchivalPolicy_09072019.pdf" target="_blank">Archival Policy<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/Whistle_Blower_Policy_effective_08112023.pdf" target="_blank">Whistle Blower Policy<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/CSR_Policy13112021_L.pdf" target="_blank">CSR Policy<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/CodeofPractices_Insider_Trading.pdf" target="_blank">Code of Practices and Procedures for Fair Disclosure of UPSI<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/PolicyDeterminingLegitimatePurposeDisclosureUPSI.pdf" target="_blank">Policy for determining legitimate purpose for disclosure of UPSI<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/PolicyforDeterminingMaterialSubsidiariesFeb2025_Website.pdf" target="_blank">Policy for Determining &quot;Material&quot; Subsidiaries<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/NominationandRemunerationPolicy.pdf" target="_blank">Nomination and Remuneration Policy<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/GILCodeofConductInsiderTrading09062025_L.pdf" target="_blank">GIL- Insider Trading Code of Conduct<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                        <div class="fw v_line">&nbsp;</div>
                    </div>
    </div>
    <div class="col-md-12">
        <div class="file_downloaded_small fwp">
            <h6><a href="https://www.godrejindustries.com/public/uploads/policies_and_codes/CodeofConduct_BOD_SMP_Feb_2025_Website.pdf" target="_blank">GIL - Code of Conduct for Board of Directors and Senior Management Personnel<img src="https://www.godrejindustries.com/public/images/download.png" class="part"></a></h6>            
                    </div>
    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/about.js') }}"></script> --}}
<script type="text/javascript" src="https://www.godrejindustries.com/public/js/investors.js?v1" nonce="O27j8WGAUj9V0cYWXrZkbAVwlnznfjOG"></script>
        <script type="text/javascript" src="https://www.godrejindustries.com/public/js/stock-exchange-filings.js?v1" nonce="O27j8WGAUj9V0cYWXrZkbAVwlnznfjOG"></script>
@endpush
    