<?php 
/*dont include jquery*/
Yii::app()->clientScript->scriptMap=array('jquery.js'=>false);
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml"> 
 <head> 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <title><?php echo Yii::app()->name  ?> | <?php echo $this->pageTitle ?></title> 
 <style type="text/css"> 
   @font-face {
       font-family: sofachrome;
       src: url('<?php echo $baseUrl ?>/font/sofachrome rg.ttf');
   }    
   .easy-modal,  
   .easy-modal-animated {  
      width: 600px;  
      padding: 2em;  
      box-shadow: 1px 1px 3px rgba(0,0,0,0.35);  
      background-color: white;
    }
   body {
       font-family: sofachrome;
       font-size: 11px;
   }
 </style> 




<script>


 $(function() {
     var availableTags = [
         " JD Williams & Company Limited",
         "AA Finance",
         "Abbey Life",
         "Abbey National",
         "Abbotts",
         "Accord Mortgages",
         "Ace Store Card",
         "Acenden",
         "Adams Store",
         "Additions",
         "Advance Finance",
         "Advantage Finance",
         "Aegon",
         "Aib Group",
         "AK Insurance Services",
         "Aktiva Kapital",
         "Alba Life",
         "Albany Canada Life Limited",
         "Ald Automotive",
         "Aldermore Bank",
         "Alexander Hall",
         "Alfa Romeo",
         "All In One Finance",
         "All Sports Store Card",
         "All Vehicle Solutions",
         "Allders Financial Services",
         "Allfield Financial Group",
         "Alliance & Leicester",
         "Allianz Insurance Plc",
         "Allied Dunbar",
         "Allied Irish Bank",
         "ALPHERA Financial Services",
         "Amazon Credit Card",
         "Amber Home Loan",
         "Ambrose Wilson Store Card",
         "American Express",
         "Amigo Loans",
         "Anglian Home",
         "Ann Summers",
         "Approved Car Finance",
         "Aqua Card Services",
         "Arcadia",
         "Argos",
         "Armed Services Loan",
         "Arnold Clark",
         "Arrow Global",
         "Arvall Loan",
         "Asda Money Credit Card",
         "Asset Link Capital (No1) Limited",
         "Assurant Solutions",
         "Assurant General Insurance Limited",
         "Audi",
         "Audi (VW)",
         "Aviva",
         "Avon",
         "AXA ",
         "Axa",
         "B&Q",
         "Ballyrobert",
         "Bank Fair Legal",
         "Bank of America",
         "Bank of Cyprus",
         "Bank of Ireland",
         "Bank of Scotland",
         "Bank Of Scotland Package Account",
         "Bankers Insurance Company ",
         "Banque PSA Finance",
         "Barclaycard",
         "Barclays",
         "Barclays Packaged Account",
         "Barnsley Building Society",
         "Basinghall Finance",
         "Beacon ",
         "Beneficial Credit Card",
         "Beneficial Finance",
         "Bensons for Beds",
         "Bentalls",
         "Berkeley Burke",
         "Bespoke Finance",
         "Beverley Building Society",
         "BHF",
         "BHS",
         "Billing Finance Ltd",
         "Bira Bank",
         "Birmingham Midshires",
         "Black Diamond Credit Card",
         "Black Horse",
         "Blemain Finance",
         "Blue Sky Personal Finance Ltd",
         "BMW",
         "BMW Green Bower",
         "Bnp Paribas",
         "Boroughbury Holdings Ltd",
         "Bowker Blackburn Car Centre",
         "Bradford & Bingley",
         "Brighthouse",
         "Bristol & West Plc",
         "Britannia",
         "Britannic",
         "British Credit Trust",
         "British Gas",
         "Broad Oak Finance ",
         "Brunswick Homeloans ",
         "Burtons",
         "Cabot Financial Services",
         "Cahoot",
         "Canada Square Operations",
         "Candid Collections",
         "Canterbury Mazda",
         "Capital Bank Plc",
         "Capital Corporation Credit Card",
         "Capital Home Loans",
         "Capital Managers LLP",
         "Capital One",
         "Capquest",
         "Capstone Mortgage Services",
         "Car Giant",
         "Carcraft",
         "Cardiff Pinnacle",
         "Carland",
         "Carlyle Finance",
         "Carrington Carr Mortgages",
         "Cars 4 You",
         "Cedar Holdings",
         "Central Trust",
         "Centrica Personal Finance",
         "Century Life",
         "Chartered Trust",
         "Chelsea Building Society",
         "Cheltenham & Gloucester",
         "Cheshire Building Society",
         "CI Finance Limited",
         "Cigna Mortgages",
         "CIS Loans",
         "Citi Financial Europe plc",
         "Citibank",
         "CitiFinancial",
         "Citigroup",
         "Citroen Finance",
         "CL Finance",
         "Clarke Nicklin",
         "Classic Confidence Catalogue",
         "Clerical Medical",
         "Clode Retail Financial",
         "Close Consumer Finance",
         "Close Motor Finance",
         "Close Premium Finance",
         "Clover Lease",
         "Club La Costa (UK) PLC",
         "Club Vitality",
         "Clydesdale Bank",
         "Clydesdale Bank Packaged Account",
         "Clydesdale Financial Services",
         "Co-operative",
         "Co-Operative Packaged Account",
         "Colonial Finance Mortgages",
         "Comet",
         "Commercial Premium Finance",
         "Commercial Union ",
         "Compass Finance",
         "Compucredit",
         "Confidential Mortgage Solutions",
         "Continental Life Windsor",
         "Countrywide Assured PLC",
         "Coutts Private Banking",
         "Coventry Building Society",
         "Creation Financial Services Limited",
         "Cumberland Building Society",
         "Currys",
         "D & G Financial Services",
         "Danske Bank PPI Team",
         "Darlington Building Society",
         "Days",
         "Dean House Plc",
         "Debenhams",
         "Delete",
         "Dell Finance",
         "Deloitte",
         "Derbyshire Building Society",
         "DFS",
         "Dial4aLoan Limited",
         "Direct Line",
         "Dixons",
         "Dolphin Bathrooms",
         "Dorothy Perkins",
         "Dot Financial Services",
         "Dreams Hire Purchase",
         "Dunction Plc",
         "Dunfermline Building Society",
         "Eagle Star",
         "East Anglian Finance",
         "Easy Money Credit Card",
         "Egg Bank",
         "Enact Legal Solutions",
         "Endeavour Personal",
         "Engage Credit Limited",
         "Envy Store Card",
         "Equitable Life",
         "Ernest Jones",
         "Evans",
         "Evergreen Finance",
         "Everton",
         "Everyday Loans",
         "Express Gifts Ltd",
         "F.S.C.S Financial Services Compensation Scheme ",
         "Faith",
         "Family Finance",
         "Fashion World ",
         "Faughanvale Credit Union Ltd",
         "Fauk Mortgages",
         "FCE Bank",
         "Fenwick",
         "FGA Capital",
         "Fiat",
         "Financial Insurance Company Limited ",
         "Financial Insurance Company Ltd",
         "Financial Ombudsman Service",
         "First Active",
         "First Assist",
         "First Direct",
         "First National Consumer Finance",
         "First National Motor Finance",
         "First National Tricity Finance",
         "First Plus",
         "First Plus Financial Group",
         "First Response Finance Ltd",
         "First Trust",
         "First Trust Bank",
         "First Trust Packaged Bank Account",
         "FLM Loans",
         "FlyBe",
         "Fn First Charge Mortgages",
         "Ford Financial Plc",
         "Forthright Finance",
         "Fortis Lease Uk Ltd",
         "Fortrets Finance",
         "Freedom Finance Plc",
         "Freemans",
         "Freeway Ltd",
         "Friends Provident",
         "Frizzell",
         "Furness Building Society",
         "Furniture Village",
         "Future Mortgages Ltd",
         "GE Capital ",
         "GE Capital Bank Limited ",
         "GE Capital Direct",
         "GE Money",
         "Genworth Financial",
         "GK Group",
         "Glenn Gibbions (Peak Mortgage)",
         "GM Card",
         "GM Credit Card",
         "GMAC Car Finance ",
         "Go Mortgages",
         "Goldfish Bank",
         "Granite",
         "Grant Thornton LLP UK",
         "Grattan",
         "Greenwood Personal Credit",
         "Gresham",
         "Guardian Finance",
         "H Samuel",
         "Hadenglen Home Finance Plc",
         "Halfords",
         "Halifax",
         "Halifax Packaged Account",
         "Hammonds",
         "Hartwell Finance Limited",
         "Harvey Nichols",
         "Harveys Furniture",
         "Hayburn Rock",
         "HBOS",
         "Heather Valley (Woolens)",
         "Hennes & Mauritz",
         "Heritable Mortgages",
         "HFC ",
         "Highland Finance",
         "Hillesden Securities Ltd",
         "Hilton Platinum Visa Cards",
         "Hinckley & Rugby Building Society",
         "Hitachi Capital UK",
         "HMC Mortgages",
         "Holland Finance",
         "Home Retail Group",
         "HomeBank",
         "Homebase",
         "Honda",
         "House of Fraser",
         "HSBC",
         "HSBC PACKAGED BANK ACCOUNT",
         "HSBC PCCO Customer Support",
         "Humberclyde",
         "Hyundai Corp. Ltd.",
         "I Group Co Ltd",
         "Iceland Foods Limited",
         "Igroup Mortgages",
         "IGS Mortgage Services",
         "Ikano Financial Services",
         "IKEA",
         "Inchcape Retail Limited",
         "Independent Mortgage Co Ltd.",
         "Intelligent Finance",
         "International Motors Finance LTD",
         "Interpartners Network Limited",
         "Intrum Justitia Credit ",
         "Ipswich Building Society",
         "Isle Of Man Bank",
         "Isme",
         "Iveco",
         "J D Sport",
         "J.D. Williams",
         "Jaguar Land Rover Limited",
         "JCB",
         "Jerrold Holdings Limited",
         "JJB Sports",
         "John Charcol",
         "John Deere Ltd",
         "John Lewis",
         "K&Co",
         "Kaleidoscope",
         "Karen Millen",
         "Kawasaki Finance",
         "Kays Catalogue",
         "Kensington Mortgages",
         "Kia",
         "Kia Motor Finance",
         "Kia Twickenham",
         "La Redoute",
         "Laura Ashley",
         "Laurential Life",
         "Law Society ",
         "Leeds Building Society",
         "Leek United",
         "Leekes",
         "Legal & General",
         "Lex Autolease",
         "LHSG Insurance Services",
         "Lincoln Financial",
         "Link Loans",
         "Littlewoods",
         "Liverpool Victoria",
         "Lloyds Bank Packaged Account",
         "Lloyds Bowmaker Ltd",
         "Lloyds Package Account",
         "Lloyds TSB",
         "Lloyds Tsb Asset Finance/BlackHorse ",
         "Loan Options",
         "Loans Direct",
         "Loans.Co.Uk",
         "Lombard & Ulster",
         "Lombard Direct",
         "London & Country Mortgages",
         "London & Edinburgh ",
         "London and Manchester",
         "Look Again",
         "Loughborough Building Society",
         "Lowell Portfolio 1 Ltd",
         "Lpf Credit Card",
         "Luma",
         "Majestic Finance Plus Ltd",
         "Mallard Vehicle Finance",
         "MAN Financial Services Plc.",
         "Marbles",
         "Marbles / HSBC",
         "Mark O'neill",
         "Market Harborough Building Society",
         "Marks & Spencer",
         "Marriott",
         "Marsden Building Society ",
         "Marsh Finance",
         "Marshall Ward",
         "Mastercard ",
         "Mastercare",
         "Max Recovery Ltd",
         "Mazda Credit Customer Relations",
         "Mazda Finance",
         "Mbna",
         "MBNA (Alternative)",
         "Melgold Ltd",
         "Melton Mowbray Building Society",
         "Mercedes Finance",
         "Meridian Credit Card",
         "Meritpoint Limited ",
         "Meritpoint Ltd",
         "Metropolitan Collection Services Ltd",
         "MFI",
         "MG Hire Purchase",
         "MGM Assurance",
         "Michael Franklyn of Trafalgar Square Solutions",
         "Midland Life Ltd",
         "Millfield Partnership",
         "Mini Cooper",
         "Mint",
         "Miss Selfridge ",
         "Mitsubishi",
         "Mkdp Llp",
         "Monarch",
         "Money Barn",
         "Moneybarn",
         "Monsoon",
         "Monument",
         "Moorgate",
         "Morgan Bransow Associates",
         "Morgan Stanley",
         "Morses Club",
         "Mortgage 2000 Ltd",
         "Mortgage Advise Shop",
         "Mortgage Agency Services Number Five Limited",
         "Mortgage Agency Services Number Six Limited",
         "Mortgage Brand Ltd",
         "Mortgage Express",
         "Mortgage Issues Billericay",
         "Mortgage Talk",
         "Mortgage Trust",
         "Mortgages For Business Ltd",
         "Mortgages Plc",
         "Mothercare Services",
         "MotoNovo",
         "MotoNovo Finance",
         "Motor Move",
         "Motorpoint",
         "MyFinanciaiServicesLtd",
         "NAG Credit Cards",
         "National & Provincial Building Society",
         "National Counties Building Society",
         "Nationwide ",
         "Nationwide Package Account",
         "Natwest",
         "Natwest For Mortgages only",
         "NatWest Package Account ",
         "NDR Money Catalogue",
         "Nectar",
         "Nemo Personal Finance Ltd",
         "New Day LTD",
         "New Look",
         "Newcastle Building Society",
         "Next",
         "Niib",
         "Nissan Hire Purchase",
         "North Bridge Loans",
         "North Herts",
         "North Yorkshire Mortgages",
         "Northampton Audi",
         "Northern Bank",
         "Northern Rock",
         "Northridge Finance",
         "Northridge Finance",
         "Norwich & Peterborough Building Society",
         "Norwich Union",
         "Norwich Union Life",
         "Nottingham Building Society",
         "Nova Retail Finance",
         "NRAM",
         "NSPCC",
         "Oakwood Homeloans Holdings Ltd ",
         "Oasis Store Card",
         "Ocean Finance and Mortgages",
         "Ocwen ",
         "Oli Store Cards",
         "One Savings Bank",
         "Online Finance",
         "Open & Direct Retail Services",
         "Opus",
         "Orange Credit Card",
         "Outfit",
         "Oxendales & Co Ltd",
         "PACE Mortgage Solutions Ltd",
         "Pacific Financial Planning",
         "Paragon",
         "Paratus AMC Limited",
         "Park Motor Finance",
         "Payday Uk",
         "Paymentshield",
         "PC World",
         "Pearl Assurance",
         "Penicuik Aluminium Products Ltd",
         "Penrith Building Society",
         "Peoples Bank",
         "Peter Seymour",
         "Peterborough Audi",
         "Peugeot Financial Services Plc",
         "Phoenix",
         "Picture Loans",
         "Pilot Store Card",
         "Pinnacle Insurance",
         "Pioneer",
         "Platform",
         "Porsche Financial Services ",
         "Portland Building Society",
         "Portman Building Society",
         "Post Office",
         "PRA Group Ltd",
         "Preference Credit Card",
         "Preferred Mortgages",
         "Premier Man Store Card",
         "Premium Credit Ltd",
         "Prestige Finance",
         "Primrose Associates",
         "Principles",
         "Priority Club",
         "Private &Commercial Finance",
         "Progressive Building Society",
         "Provident",
         "Provident Loans",
         "Prudential",
         "R.B.S card operations",
         "Raphaels Bank",
         "Rate Setter",
         "RCI Financial Services",
         "Redcat Catalogue",
         "Redcats LTD",
         "Redstone",
         "Reed Rains",
         "Regency",
         "Reids Sofa",
         "Reliance Mutual",
         "Renault UK Ltd",
         "Restons Solicitors",
         "Richard Nokes of Majestic Finance Plus Ltd",
         "Ridgeworth Fairmile",
         "River Island",
         "Ron Skinner & Sons",
         "Roof Top Mortgages",
         "Rothschild Bank",
         "Royal & Sun Alliance",
         "Royal Bank of Scotland",
         "Royal Bank of Scotland Group",
         "Royal Bank of Scotland Package Account",
         "Royal London",
         "Russell & Bromley",
         "Ryder & Dutton",
         "Saab",
         "Saffron Building Society",
         "Saga Platinum",
         "Sainsburys",
         "Santander",
         "Santander Cards",
         "Santander Consumer Finance",
         "Santander Packaged Account",
         "Santander UK Plc",
         "Scarlet Marketing Services Ltd",
         "Scheidegger Training",
         "Scottish Life",
         "Scottish Widows",
         "SCS Furniture",
         "Seat Finance",
         "Secure Bank",
         "Select Mortgage Company ",
         "Selfridges",
         "Sesame Ltd",
         "Shipley Hall Loans",
         "Shogun Finance Limited",
         "Shop Direct",
         "Shopacheck",
         "Siemens",
         "Simply Be",
         "Simply Yours",
         "Sinclair ",
         "Singers",
         "Skipton Building Society",
         "Skoda",
         "Sky Credit Card",
         "Sleepmaster",
         "Smart ",
         "Smile",
         "Snap -On Tools",
         "Sony",
         "Southern Finance",
         "Southern Pacific",
         "SPPL Loans",
         "St Andrew's Group",
         "St Andrew's Group",
         "St. James's Place Bank",
         "Staffordshire Building Society",
         "Standard Life",
         "Sterling Credit Card",
         "Sterling Credit Ltd",
         "Stirling Credit Union",
         "Stockport Renault",
         "Studio 24",
         "Style Financial Services",
         "Sunlife",
         "Suzuki",
         "Swift Advances",
         "Sygma",
         "Termpart Ltd",
         "Tesco Bank",
         "Tessera",
         "Test Lender",
         "Texas Spens And Save",
         "The Bradley Company",
         "The Funding Corporation",
         "The Hanley",
         "The Mortgage Group",
         "The Mortgage Works",
         "The One Account",
         "The Oval",
         "The Paddington Building Society",
         "The Principality Building Society",
         "Thomas Cook",
         "Thomson Legal",
         "Three Cliffs Finance",
         "Time Retail Finance",
         "TMB Mortgage",
         "Top Man Card Services",
         "Top Shop",
         "Topman",
         "Topshop",
         "Total Mortgage Solutions",
         "Toyota Financial Services",
         "Toys R Us",
         "TSB Package Account",
         "TSB PPI",
         "Turnkey Mortgages Ltd",
         "UBS",
         "UCB Home Loans",
         "Ulster Bank",
         "Ulster Bank Package Account",
         "Unison Credit Card",
         "Unsecured Credit Company Plc",
         "Utility Warehouse ",
         "V12 Personal Finance",
         "Vanquis",
         "Vanquis Visa Card",
         "Vanquish Bank",
         "Vans Direct",
         "Vauxhall",
         "Vertbaudet",
         "Very",
         "Virgin",
         "Virgin Money",
         "Virgin One",
         "Volkswagen Finance",
         "Volvo",
         "Waitrose",
         "Wallis Store Card",
         "Warehouse",
         "Wave Lending Limited",
         "Wealthmaster Financial Management",
         "Webb Resolutions",
         "Welcome Finance",
         "Wesleyan",
         "West Bromwich Building Society",
         "Whitehall Financial Services ",
         "Witt UK",
         "Woolwich",
         "Wye Finance",
         "Yorkshire Bank",
         "Yorkshire Bank Package Account",
         "Yorkshire Building Society",
         "Zebra Finance",
         "Zero Finance",
         "Zoopla",
         "Zopa",
         "Zurich",
         "Unknown"
     ];
     $("#PBA-provider").autocomplete({
         source: availableTags
     });
     $("#PPI-provider").autocomplete({
         source: availableTags
     });
 });

 function showDiv() {
     // hide any showing  
     $(".specific").each(function() {
         $(this).css('display', 'none');
     });

     // our target  
     var target = "#specific_" + $("#add_account").children(":selected").attr("id");
     target = target.split(" ");

     // does it exist?  

     if ($(target[0]).length > 0) {
         // show it  
         $(target[0]).css('display', 'block');
     }
 }

 $(document).ready(function() {

     // bind it  
     $("#add_account").change(function() {
         showDiv();
     });

     // run it automagically  
     showDiv();
 });
 window.onload = function() {

     var pba_charge = document.getElementById('pba_charge');
     var pba_years = document.getElementById('pba_years');
     var pba_months = document.getElementById('pba_months');
     var result = document.getElementById("result");

     pba_charge.onkeyup = calc;
     pba_years.onkeyup = calc;
     pba_months.onkeyup = calc;

     function calc() {
         var a = parseFloat(pba_charge.value) || 0;
         var b = parseFloat(pba_years.value) || 0;
         var c = parseFloat(pba_months.value) || 0;
         var m = (b * 12) + c;
         result.innerHTML = m * a;
     }
 }



 </script> 
 </head> 
 <body> 
 <!-- body start -->


<?php echo $content ?>

 <!-- body end -->

 </body> 
 </html> 