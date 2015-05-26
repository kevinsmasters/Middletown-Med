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
case 'Howard Feldman, M.D.':
  dnumb = 3
  break;
case 'John F. Ferguson, M.D. F.C.C.P.':
  dnumb = 4
  break;
case 'Douglas R. Fletcher, M.D., F.C.C.P.':
  dnumb = 5
  break;
case 'Elliott Friedman, M.D.':
  dnumb = 6
  break;
case 'Alexander Gapay, M.D., F.A.C.E.P.':
  dnumb = 7
  break;
case 'Dr. Gary C. Garfield, F.C.C.P.':
  dnumb = 8
  break;
case 'Cynthia Gilmour, F.N.P.':
  dnumb = 9
  break;
  case 'Narender Goel, M.D.':
  dnumb = 10
  break;
case 'Jagruti Gohel, M.D.':
  dnumb = 11
  break;
case 'Rajan Gulati, M.D.':
  dnumb = 12
  break;
case 'Jennifer L. Heinze, P.A.':
  dnumb = 13
  break;
case 'Kesha James, M.D.':
  dnumb = 14
  break;
case 'Cassilda James, M.D.':
  dnumb = 15
  break;
  case 'Florence Jean-Louis, M.D., F.A.C.O.G.':
  dnumb = 16
  break;
case 'Elena Kaznatcheeva, M.D.':
  dnumb = 17
  break;
case 'Maria Karimi, M.D.':
  dnumb = 18
  break;
case 'Sheldon D. Leidner, M.D., F.A.C.G.':
  dnumb = 19
  break;
case 'David Lowenkron, M.D., F.A.C.C.':
  dnumb = 20
  break;
case 'Robert Mantica, M.D.':
  dnumb = 21
  break;
case 'Anthony Martini, M.D.':
  dnumb = 22
  break;
  case 'Apurva Motivala, M.D., F.A.C.C, F.S.C.A.I.':
  dnumb = 23
  break;
case 'Uri Napchan, M.D.':
  dnumb = 24
  break;
case 'Aradhna Pal, M.S., R.D., C.D.E.':
  dnumb = 25
  break;
case 'Martin Palmer, M.D.':
  dnumb = 26
  break;
case 'Maryann Park, M.D. F.C.C.P.':
  dnumb = 27
  break;
case 'Dhiren Patel, M.D.':
  dnumb = 28
  break;
case 'Charles Peralo, M.D.':
  dnumb = 29
  break;
case 'John Podeszwa, M.D.':
  dnumb = 30
  break;
case 'Jennifer Reich, M.D.':
  dnumb = 31
  break;
case 'Maria Reyes, M.D.':
  dnumb = 32
  break;
case 'Sadhis Rivas, M.D.':
  dnumb = 33
  break;
case 'Emad Rizkala, M.D.':
  dnumb = 34
  break;
case 'Vicki Rogove, M.D.':
  dnumb = 35
  break;
case 'Donald Roth, M.D.':
  dnumb = 36
  break;
case 'Francie Sales, M.D.':
  dnumb = 37
  break;
case 'David Schwalb, M.D.':
  dnumb = 38
  break;
case 'Bonnie Seecharran, M.D.':
  dnumb = 39
  break;
case 'Shmuel Shapira, M.D., F.A.C.C.':
  dnumb = 40
  break;
case 'Stuart Tashman, M.D., F.A.A.P.':
  dnumb = 41
  break;
case 'Dennis Waxman, P.A.':
  dnumb = 42
  break;
case 'Jonathan Weiss, M.D., F.C.C.P.':
  dnumb = 43
  break;
case 'Yinggang Zheng, M.D.':
  dnumb = 44
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
	locSet = "Port Jervis  (845) 697-3271"
	break;
	case ("rtsboro"):
	locSet = "Wurtsboro  (845) 888-2200"
	break;
	default:
	locSet = "Middletown"
}

//alert (locSet);
$('#si_contact_ex_field1_5').val(locSet);
});


