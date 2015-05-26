// JavaScript Document
function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
var docName = getQueryVariable("doc");
docName = decodeURI(docName);
docName = decodeURI(docName);
if (docName == "false") {
	docName = "";
} else {
	jQuery('#si_contact_ex_field1_4').val(docName);
};
//alert (decodedS);
var locName = getQueryVariable("loc"); 
var dnumb;
switch(docName)
{
case 'Rosa Atkinson, M.D., F.A.C.O.G.': 
  dnumb = 1
  break;
case 'Koshnaf Antar, M.D.':
  dnumb = 2
  break;
 case 'Kristine Bihun, R.D.N., C.D.E.': 
  dnumb = 3
  break; 
case 'Gena Brower, F.N.P.':
  dnumb = 4
  break;
case 'Donna Collins, P.A.':
  dnumb = 5
  break;
case 'Kimberly Darrigo | Adult Nurse Practitioner':
  dnumb = 6
  break;
case 'John F. Ferguson, M.D. F.C.C.P.':
  dnumb = 7
  break;
case 'Nicole Fleischmann, M.D.':
  dnumb = 8
  break;
case 'Douglas R. Fletcher, M.D., F.C.C.P.':
  dnumb = 9
  break;
case 'Elliott Friedman, M.D..':
  dnumb = 10
  break;
  case 'Alexander Gapay, M.D., F.A.C.E.P.':
  dnumb = 11
  break;
case 'Gary C. Garfield, F.C.C.P.':
  dnumb = 12
  break;
case 'Cynthia Gilmour, F.N.P.':
  dnumb = 13
  break;
case 'Narender Goel, M.D.':
  dnumb = 14
  break;
case 'Jagruti Gohel, M.D.':
  dnumb = 15
  break;
case 'Rajan Gulati, M.D.':
  dnumb = 16
  break;
 case 'Aaron Hagge-Greenberg, M.D.':
  dnumb = 17
  break;
  case 'Amanda Hansen, P.A.':
  dnumb = 18
  break;
case 'Jennifer L. Heinze, P.A.':
  dnumb = 19
  break;
case 'Kesha James, M.D.':
  dnumb = 20
  break;
case 'Cassilda James, M.D.':
  dnumb = 21
  break;
case 'Florence Jean-Louis, M.D., F.A.C.O.G.':
  dnumb = 22
  break;
case 'Elena Kaznatcheeva, M.D.':
  dnumb = 23
  break;
case 'Maria Karimi, M.D.':
  dnumb = 24
  break;
case 'Sheldon D. Leidner, M.D., F.A.C.G.':
  dnumb = 25
  break;
  case 'David Lowenkron, M.D., F.A.C.C.':
  dnumb = 26
  break;
case 'Jennie Luna, M.D.':
  dnumb = 27
    break;
case 'Sohail Mamdani, D.O.':
  dnumb = 28
  break;
case 'Robert Mantica, M.D.':
  dnumb = 29
  break;
case 'Anthony Martini, M.D.':
  dnumb = 30
  break;
case 'Apurva Motivala, M.D., F.A.C.C, F.S.C.A.I.':
  dnumb = 31
  break;
case 'Uri Napchan, M.D.':
  dnumb = 32
  break;
case 'Aradhna Pal, M.S., R.D., C.D.E.':
  dnumb = 33
  break;
case 'Martin Palmer, M.D.':
  dnumb = 34
  break;
case 'Maryann Park, M.D. F.C.C.P.':
  dnumb = 35
  break;
case 'Dhiren Patel, M.D.':
  dnumb = 36
  break;
case 'Charles Peralo, M.D.':
  dnumb = 37
  break;
case 'John Podeszwa, M.D.':
  dnumb = 38
  break;
case 'Christine Quinlan, F.N.P.':
  dnumb = 39
  break;
case 'Jennifer Reich, M.D.':
  dnumb = 40
  break;
case 'Maria Reyes, M.D.':
  dnumb = 41
  break;
case 'Emad Rizkala, M.D.':
  dnumb = 42
  break;
case 'Donald Roth, M.D.':
  dnumb = 43
  break;
case 'Ratna Sabnis, M.D., F.A.C.O.G.':
  dnumb = 44
  break;
case 'Francie Sales, M.D.':
  dnumb = 45
  break;
case 'Arpine Saribekyan, M.D.':
  dnumb = 46
  break;
case 'David Schwalb, M.D.':
  dnumb = 47
  break;
 case 'Bonnie Seecharran, M.D.':
  dnumb = 48
  break;
  case 'Kirsten Tandberg, P.A.':
  dnumb = 49
  break;
  case 'Stuart Tashman, M.D., F.A.A.P.':
  dnumb = 50
  break;
  case 'Clifford Teich, M.D.':
  dnumb = 51
  break;
  case 'Sharon Valencia, D.P.M.':
  dnumb = 52
  break;
  case 'Carol Waxman, P.A.-C':
  dnumb = 53
  break;
  case 'Dennis Waxman, P.A.':
  dnumb = 54
  break;
  case 'Jeffrey R. Weinstein, M.D., FAAP':
  dnumb = 55
  break;
  case 'Jonathan Weiss, M.D., F.C.C.P.':
  dnumb = 56
  break;
  case 'Yinggang Zheng, M.D.':
  dnumb = 57
  break;
default:
  dnumb = 0
}
console.log('doc array position ' + dnumb);
console.log('doc name queried' + docName);
jQuery(function($) {
$('#si_contact_ex_field1_4').attr('value', docName);
$('#fscf_field3_7').attr('value', dnumb);
$('#fscf_field5_6').attr('value', dnumb);

$('#fscf_field4_7').attr('value', dnumb);
$('#fscf_field1_7').attr('value', dnumb);

var locSet;
switch(locName) {
	case ("rwick"):
	locSet = "Warwick"
	break;
	case ("llenville"):
	locSet = "Ellenville"
	break;
	case ("iberty Medical"):
	locSet = "Liberty Medical Group"
	break;
	case ("iddletown"):
	locSet = "Middletown"
	break;
	case ("ort Jervis"):
	locSet = "Port Jervis"
	break;
	case ("rtsboro"):
	locSet = "Wurtsboro"
	break;
	case ("onticello"):
	locSet = "Catskill Adult & Pediatric"
	break;
	case ("oomingburg"):
	locSet = "Bloomingburg"
	break;
	case ("ester"):
	locSet = "Chester"
	break;
	case ("eorge Giovannone Physical Therapy"):
	locSet = "George Giovannone Physical Therapy"
	break;
	case ("ullivan"):
	locSet = "Sullivan Internal Medicine Group"
	break;
	default:
	locSet = "Middletown"
}

//alert (locSet);
$('#si_contact_ex_field1_8').val(locSet);
});


