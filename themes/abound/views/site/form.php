
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml"> 
 <head> 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <script type="text/javascript" src="/REQUIREMENTS/assets/script/crafty_postcode.class.js"></script><script src="assets/script/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script> 
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
 <script type="text/javascript" src="assets/script/jquery.easyModal.js"></script> 
 <script type="text/javascript"> 
 $(function() {  
 $('.easy-modal').easyModal({  
 top: 200,  
 overlay: 0.2  
 });  
  
 $("#add_account").change(function(e){  
 //$('.easy-modal-open').click(function(e) {  
 var target = "#modal_" + $("#add_account").children(":selected").attr("id"); target = target.split(" ");  
 //var target = $(this).attr('href');  
 $(target[0]).trigger('openModal');  
 console.log(target[0]);  
 e.preventDefault();  
 });  
  
 $('.easy-modal-close').click(function(e) {  
 $('.easy-modal').trigger('closeModal');  
 });  
 });  
 </script> 
 <style type="text/css"> 
 .easy-modal,  
 .easy-modal-animated {  
 width: 600px;  
 padding: 2em;  
 box-shadow: 1px 1px 3px rgba(0,0,0,0.35);  
 background-color: white;  
 }  
 </style> 
 <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script> 
 <script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script> 
 <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script> 
 <script> 
 var cp_access_token = "e4c62-b99b6-21239-0112a"; // ***** DON'T FORGET TO PUT YOUR ACCESS TOKEN HERE IN PLACE OF X's !!!! *****  
 var cp_obj_1 = CraftyPostcodeCreate();  
 cp_obj_1.set("access_token", cp_access_token);  
 cp_obj_1.set("first_res_line", "----- Main Policy Holder's address ----");  
 cp_obj_1.set("res_autoselect", "0");  
 cp_obj_1.set("result_elem_id", "crafty_postcode_result_display_1");  
 cp_obj_1.set("form", "details"); // note this is the same as cp_obj_2  
 // note the lines below are different to cp_obj_2  
 cp_obj_1.set("elem_house_num", "add_house");  
 cp_obj_1.set("elem_street1" , "add_street");  
 cp_obj_1.set("elem_street2" , "add_2"); // optional, but highly recommended  
 cp_obj_1.set("elem_town" , "add_town");  
 cp_obj_1.set("elem_postcode" , "add_postcode");  
 cp_obj_1.set("single_res_autoselect" , 1); // don't show a drop down box if only one matching address is found  
 // house name/num search setup  
 cp_obj_1.set("elem_search_house" , "search_string");  
 var cp_obj_2 = CraftyPostcodeCreate();  
 cp_obj_2.set("access_token", cp_access_token);  
 cp_obj_2.set("first_res_line", "----- Secondary Policy Holder's address ----");  
 cp_obj_2.set("res_autoselect", "0");  
 cp_obj_2.set("result_elem_id", "crafty_postcode_result_display_2");  
 cp_obj_2.set("form", "details"); // note this is the same as cp_obj_2  
 // note the lines below are different to cp_obj_1  
 cp_obj_2.set("elem_house_num", "2_add_house");  
 cp_obj_2.set("elem_street1" , "2_add_street");  
 cp_obj_2.set("elem_street2" , "2_add_2"); // optional, but highly recommended  
 cp_obj_2.set("elem_town" , "2_add_town");  
 cp_obj_2.set("elem_postcode" , "2_add_postcode");  
 cp_obj_2.set("single_res_autoselect" , 1); // don't show a drop down box if only one matching address is found  
 // house name/num search setup  
 cp_obj_2.set("elem_search_house" , "2_search_string");  
  
 function FillAddress(f) {  
 if(f.sameAddress.checked == true) {  
 f.elements["2_add_house"].value = f.add_house.value;  
 f.elements["2_search_string"].value = f.add_house.value;  
 f.elements["2_add_street"].value = f.add_street.value;  
 f.elements["2_add_2"].value = f.add_2.value;  
 f.elements["2_add_town"].value = f.add_town.value;  
 f.elements["2_add_postcode"].value = f.add_postcode.value;  
 }  
 }  
  
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
 $( "#PBA-provider" ).autocomplete({  
 source: availableTags  
 });  
 $( "#PPI-provider" ).autocomplete({  
 source: availableTags  
 });  
 });  
  
 function showDiv()  
 {  
 // hide any showing  
 $(".specific").each(function(){  
 $(this).css('display','none');  
 });  
  
 // our target  
 var target = "#specific_" + $("#add_account").children(":selected").attr("id"); target = target.split(" ");  
  
 // does it exist?  
  
 if( $(target[0]).length > 0 )  
 {  
 // show it  
 $(target[0]).css('display','block');  
 }  
 }  
  
 $(document).ready(function(){  
  
 // bind it  
 $("#add_account").change(function(){  
 showDiv();  
 });  
  
 // run it automagically  
 showDiv();  
 });  
 window.onload = function(){  
  
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
 result.innerHTML = m * a ;  
 }  
 }  
 </script> 
 <title>Tonic - Add a Client</title> 
 <link href="assets/script/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" /> 
 <link href="assets/script/style.css" rel="stylesheet" type="text/css" /> 
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" /> 
 <link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" /> 
 </head> 
  
 <body> 
 <script type="text/javascript">// <![CDATA[  
 function keepSessionAlive() {  
 $.post("http://crm.thomsonlegal.uk.com/tonic/introducer/assets/script/ping.php");  
 }  
  
 $(function() { window.setInterval("keepSessionAlive()", 10000); });  
 /*  
 alternatively you could do the following:  
 window.onload = function() {  
 window.setInterval("keepSessionAlive()", 60000);  
 };  
  
 the downside of using the above method is that it can  
 later be overwritten if anyone else utilizes the  
 window.onload event. Hence the use of jQuery.  
 */  
 // ]]>  
 </script> 
 <div class="loggedin"><a href="http://www.tonicpower.co.uk/mantis/set_project.php?ref=view_all_set.php&project_id=1" target="_blank"><img src="http://crm.thomsonlegal.uk.com/tonic/introducer/assets/img/bugtracker.png" onmouseover="this.src='http://crm.thomsonlegal.uk.com/tonic/introducer/assets/img/bugtrackerSPLAT.png'" onmouseout="this.src='http://crm.thomsonlegal.uk.com/tonic/introducer/assets/img/bugtracker.png'" width="25" height="25" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;Logged in as Chris Thyers - <a href="http://crm.thomsonlegal.uk.com/tonic/introducer/logout.php">Logout</a></div><img src="http://crm.thomsonlegal.uk.com/tonic/introducer/assets/img/tllogo.jpg" style="margin:5px 0 0 5px;" /> 
 <div class="nav"><div class="navleft"><a href="http://crm.thomsonlegal.uk.com/tonic/introducer/index.php">Home</a> | <a href="http://crm.thomsonlegal.uk.com/tonic/introducer/add_client_ref.php">Add Client</a> | <a href="http://crm.thomsonlegal.uk.com/tonic/introducer/search.php">Search</a> | <a href="http://crm.thomsonlegal.uk.com/tonic/introducer/lender_info.php">Lender Database</a> | <a href="http://crm.thomsonlegal.uk.com/tonic/introducer/reports">Reports</a></div><div class="navright">&nbsp;</div></div><form id="details" name="details" method="post" action="add_client_ref.php"> 
 <table border="0" cellspacing="2px" cellpadding="2px" class="inputtbl" style=" border-bottom:none; padding:5px;"> 
 <tr class="tablehead"> 
 <td width="15%" valign="middle"><h3>Policy Holder 1</h3></td> 
 <td width="35%" valign="middle">(* Required)</td> 
 <td width="15%" valign="middle"><h3>Policy Holder 2</h3></td> 
 <td width="35%" valign="middle">(Optional)</td> 
 </tr> 
 <tr> 
 <td valign="middle">Closer:</td> 
 <td valign="middle"><span id="sprytextfield11"> 
 <input name="closer" type="text" id="closer" value="" /> 
 <span class="textfieldRequiredMsg">A value is required.</span></span>*</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">Title:</td> 
 <td valign="middle"><span id="spry_title"> 
 <select name="title" class="fields" id="title" tabindex="1"> 
 <option>--Select--</option> 
 <option value="Mr">Mr</option> 
 <option value="Mrs">Mrs</option> 
 <option value="Miss">Miss</option> 
 <option value="Ms">Ms</option> 
 <option value="Dr">Dr</option> 
 <option value="Other">Other</option> 
 </select> 
 <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span> * </td> 
 <td valign="middle">Title:</td> 
 <td valign="middle"><select name="2_title" class="fields" id="2_title" tabindex="16"> 
 <option value="">--Select--</option> 
 <option value="Mr">Mr</option> 
 <option value="Mrs">Mrs</option> 
 <option value="Miss">Miss</option> 
 <option value="Ms">Ms</option> 
 <option value="Dr">Dr</option> 
 <option value="Other">Other</option> 
 </select></td> 
 </tr> 
 <tr> 
 <td valign="middle">Forename: </td> 
 <td valign="middle"><span id="spry_forename"> 
 <input name="forename" type="text" id="forename" tabindex="2" value="" /> 
 <span class="textfieldRequiredMsg">A value is required.</span></span> *</td> 
 <td valign="middle">Forename: </td> 
 <td valign="middle"><input type="text" name="2_forename" id="2_forename" tabindex="17" /></td> 
 </tr> 
 <tr> 
 <td valign="middle">Surname: </td> 
 <td valign="middle"><span id="spry_surname"> 
 <input name="surname" type="text" id="surname" tabindex="3" value="" /> 
 <span class="textfieldRequiredMsg">A value is required.</span></span> *</td> 
 <td valign="middle">Surname: </td> 
 <td valign="middle"><input type="text" name="2_surname" id="2_surname" tabindex="18" /></td> 
 </tr> 
 <tr> 
 <td valign="middle">Date of Birth: </td> 
 <td valign="middle"><span id="spry_dob"> 
 <input name="dob" type="text" id="dob" tabindex="4" value="" /> 
 <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span> * (YYYY-MM-DD)</td> 
 <td valign="middle">Date of Birth: </td> 
 <td valign="middle"><span id="spry_2_dob"> 
 <input type="text" name="2_dob" id="2_dob" tabindex="19" /> 
 <span class="textfieldInvalidFormatMsg">Invalid format.</span></span>(YYYY-MM-DD)</td> 
 </tr> 
 <tr> 
 <td valign="middle">E-mail: </td> 
 <td valign="middle"><span id="spry_email"> 
 <input name="email" type="text" id="email" tabindex="5" value="" /> 
 <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span> *</td> 
 <td valign="middle">E-mail: </td> 
 <td valign="middle"><span id="spry_2_email"> 
 <input type="text" name="2_email" id="2_email" tabindex="19" /> 
 <span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td> 
 </tr> 
 <tr> 
 <td valign="middle">Daytime Telephone: </td> 
 <td valign="middle"><span id="sprytel_daytime"> 
 <input name="tel_daytime" type="text" id="tel_daytime" tabindex="6" value="" /> 
 <span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldRequiredMsg">A value is required.</span></span></td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">Evening Telephone:  
 <br /></td> 
 <td valign="middle"><span id="spry_tel_evening"> 
 <input type="text" name="tel_evening" id="tel_evening" tabindex="7" /> 
 <span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldRequiredMsg">A value is required.</span></span></td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">Mobile Telephone:</td> 
 <td valign="middle"><span id="spry_tel_mobile"> 
 <input name="tel_mobile" type="text" id="tel_mobile" tabindex="8" value="" /> 
 <span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldRequiredMsg">A value is required.</span></span>*</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">House Name/Number: </td> 
 <td valign="middle"><input name="search_string" type="text" id="search_string" tabindex="9" value="" /> 
 *</td> 
 <td valign="middle">House Name/Number: </td> 
 <td valign="middle"><input type="text" name="2_search_string" id="2_search_string" tabindex="20" /></td> 
 </tr> 
 <tr> 
 <td valign="middle">Postcode</td> 
 <td valign="middle"><span id="spry_postcode"> 
 <input name="add_postcode" type="text" style="width: 100px;" tabindex="10" value=""/> 
 <span class="textfieldRequiredMsg"></span></span> *  
 &nbsp;&nbsp;&nbsp;  
 <button type="button" onclick="cp_obj_1.doHouseSearch()" tabindex="11" class="button">Find Address</button></td> 
 <td valign="middle">Postcode</td> 
 <td valign="middle"><input type="text" name="2_add_postcode" style="width: 100px;" tabindex="21"/> 
 &nbsp;&nbsp;&nbsp;  
 <button type="button" onclick="cp_obj_2.doHouseSearch()" tabindex="22" class="button">Find Address</button></td> 
 </tr> 
 <tr> 
 <td colspan="2" valign="middle"><div id="crafty_postcode_result_display_1" >&nbsp;</div></td> 
 <td colspan="2" valign="middle"><div id="crafty_postcode_result_display_2" >&nbsp;</div></td> 
 </tr> 
 <tr> 
 <td valign="middle">House Name/Number: </td> 
 <td valign="middle"><span id="spry_house"> 
 <input name="add_house" type="text" tabindex="12" value=""/> 
 <span class="textfieldRequiredMsg">A value is required.</span></span> *</td> 
 <td valign="middle">House Name/Number: </td> 
 <td valign="middle"><input type="text" name="2_add_house" id="2_add_house" tabindex="23" /></td> 
 </tr> 
 <tr> 
 <td valign="middle">Street: </td> 
 <td valign="middle"><input name="add_street" type="text" id="add_street" tabindex="13" value="" /> 
 *</td> 
 <td valign="middle">Street: </td> 
 <td valign="middle"><input type="text" name="2_add_street" id="2_add_street" tabindex="24" /></td> 
 </tr> 
 <tr> 
 <td valign="middle">Address 2: </td> 
 <td valign="middle"><input name="add_2" type="text" id="add_2" tabindex="14" value="" /> 
 *</td> 
 <td valign="middle">Address 2: </td> 
 <td valign="middle"><input type="text" name="2_add_2" id="2_add_2" tabindex="25" /></td> 
 </tr> 
 <tr> 
 <td valign="middle">Town: </td> 
 <td valign="middle"><input name="add_town" type="text" id="add_town" tabindex="15" value="" /> 
 *  
 </p></td> 
 <td valign="middle">Town: </td> 
 <td valign="middle"><input type="text" name="2_add_town" id="2_add_town" tabindex="26" /></td> 
 </tr> 
 <tr> 
 <td valign="top">&nbsp;</td> 
 <td valign="top">&nbsp;</td> 
 <td valign="top">&nbsp;</td> 
 <td valign="top">or same as primary  
 <input type="checkbox" name="sameAddress" id="sameAddress" onclick="FillAddress(this.form)" tabindex="27" /></td> 
 </tr> 
 <tr> 
 <td valign="middle" align="center" colspan="4">Add Account: <select name="add_account" class="fields" id="add_account"> 
 <option selected="selected">None</option> 
 <option value="PBA" id="Packaged">Packaged Account</option> 
 <option value="PPI" id="PPI">PPI Account</option> 
 </select>&nbsp;<input type="checkbox" name="wants_cc" id="wants_cc" value="1" /> 
 Include Free PPI assesment</td> 
 </tr> 
 </table> 
 <div id="specific_PPI" class="specific"> 
 <table border="0" cellspacing="2px" cellpadding="2px" class="inputtbl" style="padding:5px; border-top-style:hidden; border-bottom-style:hidden;"> 
 <tr class="tablehead"> 
 <td colspan="4" valign="middle"><h3>Account Details</h3></td> 
 </tr> 
 <tr> 
 <td width="15%" valign="middle">&nbsp;</td> 
 <td width="35%" valign="middle">&nbsp;</td> 
 <td width="15%" valign="middle">&nbsp;</td> 
 <td width="35%" valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">Type:</td> 
 <td valign="middle"><span id="spryselect2"> 
 <select name="PPI-type" class="fields" id="PPI-type"> 
 <option value="Loan" id="PPI">Loan</option> 
 <option value="Mortgage" id="PPI">Mortgage</option> 
 <option value="Credit Card" id="PPI">Credit Card</option> 
 <option value="Store Card" id="PPI">Store Card</option> 
 <option value="Hire Purchase" id="PPI">Hire Purchase</option> 
 <option value="Overdraft" id="PPI">Overdraft</option> 
 <option value="Catalogue" id="PPI">Catalogue</option> 
 <option value="MPPI" id="PPI">MPPI</option> 
 <option value="Motor Warranty Insurance" id="PPI">Motor Warranty Insurance</option> 
 <option value="Other" id="PPI">Other</option> 
 </select> 
 <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span> 
 *</td> 
 <td valign="middle">Credit Provider:</td> 
 <td valign="middle"><span id="sprytextfield4"> 
 <input type="text" name="PPI-provider" id="PPI-provider" autocomplete="off" /> 
 <span class="textfieldRequiredMsg">A value is required.</span></span> 
 *</td> 
 </tr> 
 <tr> 
 <td valign="middle">Account Number:</td> 
 <td valign="middle"><input type="text" name="PPI-account_no" id="PPI-account_no" /></td> 
 <td valign="middle">Job Title:</td> 
 <td valign="middle"><span id="sprytextfield6"> 
 <input type="text" name="PPI-job_title" id="PPI-job_title" /> 
 </span></td> 
 </tr> 
 <tr> 
 <td valign="middle"><!--Employment Status:--></td> 
 <td valign="middle"> 
 <input type="hidden" name="PPI-emp_stat" class="fields" id="PPI-emp_stat" value="-Depreciated-"> 
 <!--<span id="spryselect3"><select name="emp_stat" class="fields" id="emp_stat" readonly>  
 <option selected="selected">-Depreciated-</option>  
 <option value="Employed">Employed</option>  
 <option value="Part-Time">Part-Time</option>  
 <option value="Temporary">Temporary</option>  
 <option value="Self Employed">Self Employed</option>  
 <option value="Retired">Retired</option>  
 <option value="Student">Student</option>  
 <option value="Unpaid Work">Unpaid Work</option>  
 <option value="Unemployed">Unemployed</option>  
 </select>--> 
 </span></td> 
 <td valign="middle"><!--When Taken:--></td> 
 <td valign="middle"><span id="sprytextfield5"> 
 <input type="hidden" name="PPI-taken" id="PPI-taken" /> 
 </span></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr class="tablehead"> 
 <td colspan="4" valign="middle"><h3>PPI Specific</h3></td> 
 </tr> 
 <tr> 
 <td width="15%">&nbsp;</td> 
 <td width="35%">&nbsp;</td> 
 <td width="15%">&nbsp;</td> 
 <td width="35%">&nbsp;</td> 
 </tr> 
 <tr> 
 <td>Date Taken: </td> 
 <td><select name="ppi_day" id="ppi_day"> 
 <option value="DD">DD</option> 
 <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option> </select> 
 /  
 <select name="ppi_month" id="ppi_month"> 
 <option value="MM">MM</option> 
 <option value="01">01</option> 
 <option value="02">02</option> 
 <option value="03">03</option> 
 <option value="04">04</option> 
 <option value="05">05</option> 
 <option value="06">06</option> 
 <option value="07">07</option> 
 <option value="08">08</option> 
 <option value="09">09</option> 
 <option value="10">10</option> 
 <option value="11">11</option> 
 <option value="12">12</option> 
 </select> 
 /  
 *  
 <select name="ppi_year" id="ppi_year"> 
 <option value="YYYY">YYYY</option> 
 <option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option> </select></td> 
 <td><p>Where Applied:</p></td> 
 <td><select name="ppi_applied" id="ppi_applied"> 
 <option value="Unknown">Unknown</option> 
 <option value="Meeting">Meeting</option> 
 <option value="Phone">Phone</option> 
 <option value="Internet">Internet</option> 
 <option value="Post">Post</option> 
 </select></td> 
 </tr> 
 <tr> 
 <td>Employment Status Then:</td> 
 <td><select name="emp_then" id="emp_then"> 
 <option value="" selected>--Select One--</option> 
 <option value="Employed">Employed</option> 
 <option value="Self Employed">Self Employed</option> 
 <option value="Company Director">Company Director</option> 
 <option value="Employed Part Time">Employed Part Time</option> 
 <option value="Unemployed">Unemployed</option> 
 <option value="Retired">Retired</option> 
 <option value="Student">Student</option> 
 </select></td> 
 <td>Employment Status Now:</td> 
 <td><select name="emp_now" id="emp_now"> 
 <option value="" selected>--Select One--</option> 
 <option value="Employed">Employed</option> 
 <option value="Self Employed">Self Employed</option> 
 <option value="Company Director">Company Director</option> 
 <option value="Employed Part Time">Employed Part Time</option> 
 <option value="Unemployed">Unemployed</option> 
 <option value="Retired">Retired</option> 
 <option value="Student">Student</option> 
 </select></td> 
 </tr> 
 <tr> 
 <td valign="top">Misselling Reasons:</td> 
 <td valign="top"><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="1" /> 
 1. Felt Coerced / Pressured<br /></td> 
 <td valign="top">&nbsp;</td> 
 <td valign="top"><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="8" /> 8. Insufficient term<br /></td> 
 </tr> 
 <tr> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="2" /> 2. Didn't know there was PPI</td> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="9" /> 9. Medical Condition</td> 
 </tr> 
 <tr> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="3" /> 3. Told it was complusory</td> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="10" /> 10. Previously Offered insufficient refund</td> 
 </tr> 
 <tr> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="4" /> 4. Told it would assist credit</td> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="11" /> 11. PPI Cost wasnt quoted</td> 
 </tr> 
 <tr> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="5" /> 5. Had alternative cover</td> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="12" /> 12. No T&amp;C explanation</td> 
 </tr> 
 <tr> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="6" /> 6. Unqualified salesperson</td> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="13" /> 13. Over 70 when policy started</td> 
 </tr> 
 <tr> 
 <td>&nbsp;</td> 
 <td><input name="ppi_reason[]" type="checkbox" id="ppi_reason[]" value="7" /> 7. Insufficient cover</td> 
 <td>&nbsp;</td> 
 <td>&nbsp;</td> 
 </tr> 
 <tr> 
 <td>&nbsp;</td> 
 <td>&nbsp;</td> 
 <td>Claimed:</td> 
 <td><select name="ppi_claimed" id="ppi_claimed"> 
 <option value="Dont Know">Dont Know</option> 
 <option value="Yes">Yes</option> 
 <option value="No">No</option> 
 <option value="Declined">Declined</option> 
 </select></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 </table> 
 </div> 
 <div id="specific_Packaged" class="specific"> 
 <table border="0" cellspacing="2px" cellpadding="2px" class="inputtbl" style="padding:5px; border-top-style:hidden; border-bottom-style:hidden;"> 
 <tr class="tablehead"> 
 <td colspan="4" valign="middle"><h3>Account Details</h3></td> 
 </tr> 
 <tr> 
 <td width="15%" valign="middle">&nbsp;</td> 
 <td width="35%" valign="middle">&nbsp;</td> 
 <td width="15%" valign="middle">&nbsp;</td> 
 <td width="35%" valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">Type:</td> 
 <td valign="middle"><span id="spryselect2"> 
 <select name="PBA-type" class="fields" id="PBA-type"> 
 <option value="Packaged Account" id="Packaged" selected="selected">Packaged Account</option> 
 </select> 
 <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span> 
 *</td> 
 <td valign="middle">Credit Provider:</td> 
 <td valign="middle"><span id="sprytextfield4"> 
 <input type="text" name="PBA-provider" id="PBA-provider" autocomplete="off" /> 
 <span class="textfieldRequiredMsg">A value is required.</span></span> 
 *</td> 
 </tr> 
 <tr> 
 <td valign="middle">Account Number:</td> 
 <td valign="middle"><input type="text" name="PBA-account_no" id="PBA-account_no" /></td> 
 <td valign="middle">Job Title:</td> 
 <td valign="middle"><span id="sprytextfield6"> 
 <input type="text" name="PBA-job_title" id="PBA-job_title" /> 
 </span></td> 
 </tr> 
 <tr> 
 <td valign="middle"><!--Employment Status:--></td> 
 <td valign="middle"> 
 <input type="hidden" name="PBA-emp_stat" class="fields" id="PBA-emp_stat" value="-Depreciated-"> 
 <!--<span id="spryselect3"><select name="emp_stat" class="fields" id="emp_stat" readonly>  
 <option selected="selected">-Depreciated-</option>  
 <option value="Employed">Employed</option>  
 <option value="Part-Time">Part-Time</option>  
 <option value="Temporary">Temporary</option>  
 <option value="Self Employed">Self Employed</option>  
 <option value="Retired">Retired</option>  
 <option value="Student">Student</option>  
 <option value="Unpaid Work">Unpaid Work</option>  
 <option value="Unemployed">Unemployed</option>  
 </select>--> 
 </span></td> 
 <td valign="middle"><!--When Taken:--></td> 
 <td valign="middle"><span id="sprytextfield5"> 
 <input type="hidden" name="taken" id="taken" /> 
 </span></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr class="tablehead"> 
 <td colspan="4" valign="middle"><h3>PBA Specific</h3></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td width="15%" valign="middle">Monthly Charge:</td> 
 <td width="35%" valign="middle">�  
 <input name="pba_charge" type="text" id="pba_charge" /> 
 *</td> 
 <td width="15%" valign="middle">Time on Account</td> 
 <td width="35%" valign="middle"><label for="pba_years"></label> 
 <input name="pba_years" type="text" id="pba_years" size="4" maxlength="2" /> 
 Years  
 <input name="pba_months" type="text" id="pba_months" size="4" maxlength="2" />  
 Months *  
 <input name="pba_closed[]" type="checkbox" id="pba_closed[]" value="1" /> 
 Account Closed<br /></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">PBA still active?</td> 
 <td valign="middle"><input type="radio" name="pba_open" value="Y" /> 
 Yes  
 <input type="radio" name="pba_open" value="N" checked="checked" /> 
 No<br /> 
 <textarea name="ope_specific" id="ope_specific" cols="45" rows="5" placeholder="e.g. If this is still open explain why and advise the client to close it ASAP." style="display:none;"></textarea></td> 
 </tr> 
 <tr> 
 <td valign="middle">Know about charge:</td> 
 <td valign="middle"><input type="radio" name="pba_notice" value="Y" /> 
 Yes  
 <input type="radio" name="pba_notice" value="N" checked="checked" /> 
 No<br /> 
 <textarea name="ntc_specific" id="ntc_specific" cols="45" rows="5" placeholder="e.g. When did they notice the fees and what did the customer beleive this charge was for?" style="display:none;"></textarea></td> 
 <td valign="middle">From</td> 
 <td valign="middle"><select name="pba_day" id="pba_day"> 
 <option value="DD">DD</option> 
 <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option> </select> 
 /  
 <select name="pba_month" id="pba_month"> 
 <option value="MM">MM</option> 
 <option value="01">01</option> 
 <option value="02">02</option> 
 <option value="03">03</option> 
 <option value="04">04</option> 
 <option value="05">05</option> 
 <option value="06">06</option> 
 <option value="07">07</option> 
 <option value="08">08</option> 
 <option value="09">09</option> 
 <option value="10">10</option> 
 <option value="11">11</option> 
 <option value="12">12</option> 
 </select> 
 /  
 *  
 <select name="pba_year" id="pba_year"> 
 <option value="YYYY">YYYY</option> 
 <option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option> </select></td> 
 </tr> 
 <tr> 
 <td valign="middle">Advised to take:</td> 
 <td valign="middle"><input type="radio" name="pba_advice" value="Y" /> 
 Yes  
 <input type="radio" name="pba_advice" value="N" /> 
 No  
 <input type="radio" name="pba_advice" value="U" checked="checked" />  
 Don't Know<br /> 
 <textarea name="adv_specific" id="adv_specific" cols="45" rows="5" placeholder="e.g. What was the advice given?" style="display:none;"></textarea> 
 </td> 
 <td valign="middle">Where Taken:</td> 
 <td valign="middle"><select name="pba_how" class="fields" id="pba_how"> 
 <option value="Meeting" selected="selected">Meeting</option> 
 <option value="Phone">Phone</option> 
 <option value="Internet">Internet</option> 
 <option value="Post">Post</option> 
 <option value="Leaflet">Leaflet</option> 
 <option value="Counter">Counter</option> 
 <option value="Cant remember">Cant remember</option> 
 </select></td> 
 </tr> 
 <tr> 
 <td valign="middle">Had a free account:</td> 
 <td valign="middle"><input type="radio" name="pba_free" value="Y" /> 
 Yes  
 <input type="radio" name="pba_free" value="N" checked="checked" /> 
 No</td> 
 <td valign="middle">Held another PBA:</td> 
 <td valign="middle"><input type="radio" name="pba_others" value="Y" /> 
 Yes  
 <input type="radio" name="pba_others" value="N" checked="checked" /> 
 No<br /> 
 <textarea name="othacc_specific" id="othacc_specific" cols="45" rows="5" placeholder="e.g. Give details of any other accounts the customer has." style="display:none;"></textarea></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">Account Benefits:</td> 
 <td valign="middle"><input name="pba_benefits[]" type="checkbox" id="pba_benefits[]" value="1" /> 
 1. RAC / AA / Breakdown Cover</td> 
 <td valign="middle">Mis-Sold Reason:</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason[]" value="1" /> 
 1. Wasn't informed of alternative free account. *</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_benefits[]" type="checkbox" id="pba_benefits[]" value="2" /> 
 2. Mobile Cover</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason[]" value="2" /> 
 2. Told they had to have it</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_benefits[]" type="checkbox" id="pba_benefits[]" value="3" />  
 3. Travel Insurance</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason[]" value="3" /> 
 3. Too old for the insurance</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_benefits[]" type="checkbox" id="pba_benefits[]" value="4" />  
 4. Overdraft</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason4" value="4" /> 
 4. Misled into taking the account<br /> 
 <textarea name="ml_specific" id="ml_specific" cols="45" rows="5" placeholder="e.g. they were told that taking the account would improve thier chances of an overdraft later on." style="display:none;"></textarea></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_benefits[]" type="checkbox" id="pba_benefits[]" value="5" /> 
 5. Home Emergency Cover</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason[]" value="5" /> 
 5. Hiked the price and didn't tell them</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_othben" type="checkbox" id="pba_othben" value="Y" />  
 6. Other<br /><textarea name="othben_specific" id="othben_specific" cols="45" rows="5" placeholder="e.g. Give details of other benefits attached to this account." style="display:none;"></textarea></td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason[]" value="6" /> 
 6. Added without their knowledge</td> 
 </tr> 
 <tr> 
 <td valign="middle">Benefits Used:</td> 
 <td valign="middle"><input name="pba_benefits_used[]" type="checkbox" id="pba_benefits_used[]" value="1" /> 
 1. RAC / AA / Breakdown Cover </td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason7" value="7" /> 
 7. Tried to cancel but forced to keep it<br /> 
 <textarea name="ca_specific" id="ca_specific" cols="45" rows="5" placeholder="e.g. when they attempted to cancel they were told that the overdraft facility would be removed." style="display:none;"></textarea></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_benefits_used[]" type="checkbox" id="pba_benefits_used[]" value="2" /> 
 2. Mobile Cover </td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason8" value="8" /> 
 8. Requirements not mentioned<br /> 
 <textarea name="re_specific" id="re_specific" cols="45" rows="5" placeholder="e.g. they were not told that they must specify a phone to add for the phone insurance." style="display:none;"></textarea></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_benefits_used[]" type="checkbox" id="pba_benefits_used[]" value="3" /> 
 3. Travel Insurance </td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason9" value="9" /> 
 9. Exclusions not satisfactorily explained<br /> 
 <textarea name="ex_specific" id="ex_specific" cols="45" rows="5" placeholder="e.g. they were not informed that thier phone would not be covered when left in the car." style="display:none;"></textarea></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_benefits_used[]" type="checkbox" id="pba_benefits_used[]" value="4" /> 
 4. Overdraft </td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason[]" value="10" /> 
 10. Told it would improve credit rating</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_benefits_used[]" type="checkbox" id="pba_benefits_used[]" value="5" /> 
 5. Home Emergency Cover<br /><textarea name="claim_specific" id="claim_specific" cols="45" rows="5" placeholder="e.g. Give details of claims the customer has made." style="display:none;"></textarea></td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason[]" value="11" /> 
 11. Told would receive special interest rates</td> 
 </tr> 
 <tr> 
 <td valign="middle">Registered Benefits:</td> 
 <td valign="middle"><input type="radio" name="pba_regben" id="pba_regben" value="Y" /> 
 Yes  
 <input type="radio" name="pba_regben" value="N" checked="checked" /> 
 No<br /><textarea name="regben_specific" id="regben_specific" cols="45" rows="5" placeholder="e.g. Details of benefits registered." style="display:none;"></textarea></td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_reason[]" type="checkbox" id="pba_reason[]" value="12" /> 
 12. Felt obliged/coerced to take the account</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">Annual Reviews:</td> 
 <td valign="middle"><input type="radio" name="pba_review" value="1" checked="checked" /> 
 Yes  
 <input type="radio" name="pba_review" value="0" /> 
 No</td> 
 <td valign="middle">TCF:</td> 
 <td valign="middle"><input name="pba_tcf[]" type="checkbox" id="pba_tcf[]" value="1" /> 
 1. Didn't feel confident that they are dealing with firms where the fair treatment of customers is central to the corporate culture.</td> 
 </tr> 
 <tr> 
 <td valign="middle">UK Resident:</td> 
 <td valign="middle"><input type="radio" name="pba_uk_resident" value="1" checked="checked" /> 
 Yes  
 <input type="radio" name="pba_uk_resident" value="0" /> 
 No (Over 183 days a year outside UK)</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_tcf[]" type="checkbox" id="pba_tcf[]" value="2" /> 
 2. Account wasn't designed to meet the needs of identified consumer groups and are not targeted accordingly.</td> 
 </tr> 
 <tr> 
 <td valign="middle">UK GP:</td> 
 <td valign="middle"><input type="radio" name="pba_ukgp" value="Y" checked="checked" /> 
 Yes  
 <input type="radio" name="pba_ukgp" value="N" /> 
 No</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_tcf[]" type="checkbox" id="pba_tcf[]" value="3" /> 
 3. Not provided with clear information and kept appropriately informed before, during and after the point of sale.</td> 
 </tr> 
 <tr> 
 <td valign="middle">Driving License:</td> 
 <td valign="middle"><input type="radio" name="pba_driver" value="Y" checked="checked" /> 
 Yes  
 <input type="radio" name="pba_driver" value="N" /> 
 No</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_tcf[]" type="checkbox" id="pba_tcf[]" value="4" /> 
 4. Advice was unsuitable and did it take account of their circumstances.</td> 
 </tr> 
 <tr> 
 <td valign="middle">Armed Forces:</td> 
 <td valign="middle"><input type="radio" name="pba_armed_forces" id="show_text" value="1" /> 
 Yes  
 <input type="radio" name="pba_armed_forces" value="0" checked="checked" /> 
 No<br /><textarea name="af_specific" id="af_specific" cols="45" rows="5" placeholder="e.g. Our client's position in the armed forces means that they have specific medical care providers that are beyond the scope of this cover." style="display:none;"></textarea></td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_tcf[]" type="checkbox" id="pba_tcf[]" value="5" /> 
 5. Account did not perform as firms have led them to expect, and the associated service is of an unacceptable standard.</td> 
 </tr> 
 <tr> 
 <td valign="middle">Value for Money: </td> 
 <td valign="middle"><input name="pba_vfm" type="radio" value="Y" checked="checked" /> 
 Yes  
 <input type="radio" name="pba_vfm" value="N" /> 
 No</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_tcf[]" type="checkbox" id="pba_tcf[]" value="6" /> 
 6. Faced unreasonable post-sale barriers imposed by firms to change product, switch provider, submit a claim or make a complaint.</td> 
 </tr> 
 <tr> 
 <td valign="middle">Welcome Pack Received:</td> 
 <td valign="middle"><input name="pba_welcome" type="radio" value="Y" /> 
 Yes  
 <input type="radio" name="pba_welcome" value="N"/> 
 No  
 <input name="pba_welcome" type="radio" value="U" checked="checked" /> 
 Don't Know</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">Sign T&amp;C's:</td> 
 <td valign="middle"><input type="radio" name="pba_terms" value="Y" /> 
 Yes  
 <input type="radio" name="pba_terms" value="N" /> 
 No  
 <input name="pba_terms" type="radio" value="U" checked="checked" /> 
 Don't Know</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 <tr> 
 <td valign="middle">Mobile Cover:</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="1" /> 
 1. Other Bank Cover</td> 
 <td valign="middle">Holiday Pattern</td> 
 <td valign="middle"><select name="hols1" class="fields" id="hols1"> 
 <option value="11" selected="selected">Never Holidays in Europe</option> 
 <option value="12">Holidays in Europe 1-3 times a year</option> 
 <option value="13">Holidays in Europe 3+ times a year</option> 
 </select></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="2" /> 
 2. Other Gadget Insurer</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><select name="hols2" class="fields" id="hols2"> 
 <option value="21" selected="selected">Never Holidays outside Europe</option> 
 <option value="22">Holidays outside Europe 1-3 times a year</option> 
 <option value="23">Holidays outside Europe 3+ times a year</option> 
 </select></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="3" /> 
 3. Mobile Network Cover</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><select name="hols3" class="fields" id="hols3"> 
 <option value="31" selected="selected">Never does Winter Sports</option> 
 <option value="32">Does Winter Sports 1-3 times a year</option> 
 <option value="33">Does Winter Sports 3+ times a year</option> 
 </select></td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="4" /> 
 4. Home Insurance</td> 
 <td valign="middle">Breakdown Cover:</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="11" /> 
 1. Company Car</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="5" /> 
 5. No Mobile Phone</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="12" /> 
 2. No Car</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="24" /> 
 6. No Smartphone</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="13" /> 
 3. Third Party Cover</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="21" /> 
 7. Declined Claim</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="14" /> 
 4. Old Car</td> 
 </tr> 
 <tr> 
 <td valign="middle">Travel Cover:</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="6" /> 
 1. Over Cover Age</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="23" /> 
 5. Declined Claim</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="7" /> 
 2. Doesn't Travel</td> 
 <td valign="middle">Overdraft</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="16" /> 
 1. Wrongly Advised</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="15" /> 
 3. Travels longer than 31 days</td> 
 <td valign="middle">Home Emergency</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="17" /> 
 1. Third Party Cover</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
  
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable8" value="8" /> 
 4. Pre Existing Condition<br /> 
 <textarea name="health_specific" id="health_specific" cols="45" rows="5" placeholder="e.g. Give details of health problems." style="display:none;"></textarea></td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="18" /> 
 2. Landlords Cover</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="9" /> 
 5. Sought Own Cover</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="19" /> 
 3. Parents / Other Accom</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="10" /> 
 6. High Risk Travel</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="20" /> 
 4. Declined Claim</td> 
 </tr> 
 <tr> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_unsuitable[]" type="checkbox" id="pba_unsuitable[]" value="22" /> 
 7. Declined Claim</td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle"><input name="pba_othinskeep" type="checkbox" id="pba_othinskeep" value="TRUE" checked="checked" /> 
 Kept other insurances after PBA sold<br /> 
 <textarea name="othins_specific" id="othins_specific" cols="45" rows="5" placeholder="e.g. Give details of why the customer cancelled the other insurances." style="display:none;"></textarea></td> 
 </tr> 
 <tr> 
 <td valign="middle">Estimated Redress:</td> 
 <td valign="middle"><strong>�<span id="result"> </span> + Interest</strong></td> 
 <td valign="middle">&nbsp;</td> 
 <td valign="middle">&nbsp;</td> 
 </tr> 
 </table> 
 </div> 
 <table border="0" cellspacing="2px" cellpadding="2px" class="inputtbl" style=" border-top:none; padding:5px;"> 
 <tr> 
 <td colspan="4" valign="top"><div align="center"><button type="submit" name="Save" id="Save" value="Save" tabindex="27" class="savebutton">Save<img src="assets/img/GreenTick.png" witdh="15" height="15" /></button><button type="reset" name="Reset" id="Reset" value="Reset" tabindex="28" class="resetbutton">Reset<img src="assets/img/RedCross.png" witdh="15" height="15" /></button></div></td> 
 </tr> 
 </table> 
  
 </form> 
 <div align="center"> 
 </div> 
  
 <script> 
 function PopupCard() {  
 window.open("../ccval.html", "_blank", "toolbar=no, scrollbars=no, resizable=no, top=100, left=700, width=350, height=500");  
 }  
 </script> 
 <div class="easy-modal" id="modal_Packaged"> 
 <div class="easy-modal-inner"> 
 <h4>Confirm Packaged Account Criteria</h4> 
 <p>Please confirm following criteria - The customer:</p> 
 <ul> 
 <li><strong>Has</strong> valid e-mail address</li> 
 <li>is <strong>not</strong> in IVA or Debt Management</li> 
 <li>is <strong>not</strong> currently in Bankruptcy</li> 
 <li>is <strong>not</strong> in debt to the bank</li> 
 <li><strong>is</strong> currently in employment</li> 
 <li><strong>has</strong> used one or less benefits excluding overdraft</li> 
 <li><strong>has</strong> still got the PBA on the account of closed less than 3 years</li> 
 </ul><br /> 
 <div align="center"><button class="easy-modal-close" title="Close">Confirm</button></div> 
 </div> 
 </div> 
 <div class="easy-modal" id="modal_PPI"> 
 <div class="easy-modal-inner"> 
 <h4>Confirm PPI Criteria</h4> 
 <p>Please confirm following criteria - The customer:</p> 
 <ul> 
 <li><strong>Has</strong> valid e-mail address</li> 
 <li>is <strong>not</strong> in IVA or Debt Management</li> 
 <li>is <strong>not</strong> currently in Bankruptcy</li> 
 <li>Began <strong>before</strong> October 2010</li> 
 <li>If HSBC or Nationwide, began <strong>before</strong> December 2007</li> 
 <li>Is <strong>not</strong> a Store Card</li> 
 <li>Is <strong>not</strong> a Cheltenham &amp; Gloucester Mortgage</li> 
 </ul><br /> 
 <div align="center"><button class="easy-modal-close" title="Close">Confirm</button></div> 
 </div> 
 </div> 
 <script type="text/javascript"> 
 $("input[name='pba_armed_forces']").change(function(){  
  
 if($(this).val()=="1")  
 {  
 $("#af_specific").show();  
 tinymce.init({ selector:"#af_specific",  
 toolbar: false,  
 statusbar: false,  
 mode : "none",  
 menubar: "insert",  
 width: 370,  
 setup: function(editor) {  
 editor.addMenuItem('insertbddis', {  
 text: 'Breakdown Forces Discount',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Benefits from breakdown cover discount due to being in the forces. ');  
 }  
 });  
 editor.addMenuItem('insertlpa', {  
 text: 'Potential Long Periods Abroad',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent("Has the potential to spend long periods of time abroad with the forces in high risk destinations classing them as a high risk traveler. ");  
 }  
 });  
 editor.addMenuItem('insertohist', {  
 text: 'Actual Long Periods Abroad',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Has been out of the country with the forces for an average of X months almost every year since opening the account rendering them unable to use the majority of the benefits whilst away. ');  
 }  
 });  
 editor.addMenuItem('insertinsu', {  
 text: 'Recommended Travel Cover',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Is in the armed forces and was recommended this account on the basis that the travel insurance would cover them whilst abroad with work. ');  
 }  
 });  
 editor.addMenuItem('insertukgp', {  
 text: 'No UK GP',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Is unable to claim medical expenses through the banks travel insurance as not registered with a UK GP due to being in the forces. ');  
 }  
 });  
 editor.addMenuItem('insertsmppc', {  
 text: 'Military Posessions Cover',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Has specialist military insurance that provides personal possession cover. ');  
 }  
 });  
 editor.addMenuItem('insertsmhi', {  
 text: 'Military Home Contents',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent("Has specialist military insurance that provides home and contents cover. ");  
 }  
 });  
 editor.addMenuItem('insertsmtc', {  
 text: 'Military Travel Cover',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent("Has specialist military insurance that provides worldwide travel cover. ");  
 }  
 });  
 }  
 });  
 }  
 else  
 {  
 tinymce.remove('#af_specific');  
 $("#af_specific").hide();  
 }  
  
 });  
 $("input[id='pba_reason4']").click(function(){  
 if(this.checked)  
 {  
 $("#ml_specific").show();  
 tinymce.init({ selector:"#ml_specific",  
 toolbar: false,  
 statusbar: false,  
 mode : "none",  
 menubar: "insert",  
 width: 370,  
 setup: function(editor) {  
 editor.addMenuItem('insertacc', {  
 text: 'Only Account Available',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Was led to believe this account was the only one available. ');  
 }  
 });  
 editor.addMenuItem('insertquest', {  
 text: 'No Questionnaire',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent("Wasn't asked a fact finding questionnaire (YPSOR) to see if the insurances and account were applicable.. ");  
 }  
 });  
 editor.addMenuItem('insertover', {  
 text: 'Offered Better Overdraft',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Was led to believe they would get a better overdraft limit and rate. ');  
 }  
 });  
 editor.addMenuItem('insertint', {  
 text: 'Offered Better Interest',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Was led to believe they would get preferential interest rates on loans, credit cards and mortgages. ');  
 }  
 });  
 editor.addMenuItem('insertcred', {  
 text: 'Credit Rating',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Was led to believe they would get an improved credit rating. ');  
 }  
 });  
 editor.addMenuItem('insertpress', {  
 text: 'Pressured',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Was not looking for a package account but was pressured into taking it. ');  
 }  
 });  
 editor.addMenuItem('insertcar', {  
 text: 'No Car',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent("Didn't have a car for the first X years of the account but was sold breakdown cover regardless. ");  
 }  
 });  
 }  
 });  
 } else {  
 tinymce.remove('#ml_specific');  
 $("#ml_specific").hide();  
 }  
 });  
 $("input[id='pba_reason7']").click(function(){  
 if(this.checked)  
 {$("#ca_specific").show();} else {$("#ca_specific").hide();}  
 });  
 $("input[id='pba_reason8']").click(function(){  
 if(this.checked)  
 {  
 $("#re_specific").show();  
 tinymce.init({ selector:"#re_specific",  
 toolbar: false,  
 statusbar: false,  
 mode : "none",  
 menubar: "insert",  
 width: 370,  
 setup: function(editor) {  
 editor.addMenuItem('insertreg', {  
 text: 'Not told to register',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Was not told to register their phones IMEI at point of sale to activate the insurance therefore leaving their phone un-insured. ');  
 }  
 });  
 }  
 });  
 } else {  
 tinymce.remove('#re_specific');  
 $("#re_specific").hide();  
 }  
 });  
 $("input[id='pba_reason9']").click(function(){  
 if(this.checked)  
 {  
 $("#ex_specific").show();  
 tinymce.init({ selector:"#ex_specific",  
 toolbar: false,  
 statusbar: false,  
 mode : "none",  
 menubar: "insert",  
 width: 370,  
 setup: function(editor) {  
 editor.addMenuItem('insertexc', {  
 text: 'Exclusions not Explained',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Was not made aware of all the exclusions and excess costs that come with the insurances. ');  
 }  
 });  
 editor.addMenuItem('insertreg', {  
 text: 'High Risk Sports',  
 context: 'insert',  
 onclick: function() {  
 editor.insertContent('Participates in high risk sports whilst abroad, e.g. diving and snowboarding. ');  
 }  
 });  
 }  
 });  
 } else {  
 tinymce.remove('#ex_specific');  
 $("#ex_specific").hide();  
 }  
 });  
 $("input[name='pba_notice']").change(function(){  
 if($(this).val()=="Y")  
 {$("#ntc_specific").show();} else {$("#ntc_specific").hide();}  
 });  
 $("input[name='pba_advice']").change(function(){  
 if($(this).val()=="Y")  
 {$("#adv_specific").show();} else {$("#adv_specific").hide();}  
 });  
 $("input[name='pba_open']").change(function(){  
 if($(this).val()=="Y")  
 {$("#ope_specific").show();} else {$("#ope_specific").hide();}  
 });  
 $("input[name='pba_others']").change(function(){  
 if($(this).val()=="Y")  
 {$("#othacc_specific").show();} else {$("#othacc_specific").hide();}  
 });  
 $("input[id='pba_unsuitable8']").click(function(){  
 if(this.checked)  
 {$("#health_specific").show();} else {$("#health_specific").hide();}  
 });  
 $("input[name='pba_regben']").change(function(){  
 if($(this).val()=="Y")  
 {$("#regben_specific").show();} else {$("#regben_specific").hide();}  
 });  
 $("input[name='pba_benefits_used[]']").click(function(){  
 if(this.checked)  
 {$("#claim_specific").show();} else {$("#claim_specific").hide();}  
 });  
 $("input[id='pba_othben']").click(function(){  
 if(this.checked)  
 {$("#othben_specific").show();} else {$("#othben_specific").hide();}  
 });  
 $("input[id='pba_othinskeep']").click(function(){  
 if(this.checked)  
 {$("#othins_specific").hide();} else {$("#othins_specific").show();}  
 });  
 <!--  
 var spryselect1 = new Spry.Widget.ValidationSelect("spry_title", {invalidValue:"-1", validateOn:["blur"]});  
 var sprytextfield1 = new Spry.Widget.ValidationTextField("spry_forename", "none", {validateOn:["blur"]});  
 var sprytextfield2 = new Spry.Widget.ValidationTextField("spry_surname", "none", {validateOn:["blur"]});  
 var sprytextfield3 = new Spry.Widget.ValidationTextField("spry_dob", "date", {format:"yyyy-mm-dd", validateOn:["blur"], useCharacterMasking:true});  
 var sprytextfield4 = new Spry.Widget.ValidationTextField("spry_email", "email", {validateOn:["blur"]});  
 var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytel_daytime", "phone_number", {format:"phone_custom", pattern:"0XXXXXXXXXX", validateOn:["blur"]});  
 var sprytextfield6 = new Spry.Widget.ValidationTextField("spry_tel_evening", "phone_number", {format:"phone_custom", pattern:"0XXXXXXXXXX", validateOn:["blur"]});  
 var sprytextfield7 = new Spry.Widget.ValidationTextField("spry_tel_mobile", "phone_number", {validateOn:["blur"], format:"phone_custom", pattern:"0XXXXXXXXXX"});  
 var sprytextfield8 = new Spry.Widget.ValidationTextField("spry_postcode", "none", {validateOn:["blur"]});  
 var sprytextfield9 = new Spry.Widget.ValidationTextField("spry_house", "none", {validateOn:["blur"]});  
 var sprytextfield10 = new Spry.Widget.ValidationTextField("spry_2_dob", "date", {isRequired:false, validateOn:["blur"], format:"yyyy-mm-dd", useCharacterMasking:true});  
 var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {validateOn:["blur"]});  
 var sprytextfield12 = new Spry.Widget.ValidationTextField("spry_2_email", "email", {isRequired:false, validateOn:["blur"]});  
 //-->  
 </script> 
 <p align='center'><br /><br />Version 1.3i - Execution-time in seconds: 0.0084629058837891</p><br /> <p align="center">Copyright &copy;2013 - 2015 Tonic Solutions Ltd - Instance Licensed to Thomson Legal</p></div> 
 </div> 
 </body> 
 </html> 
