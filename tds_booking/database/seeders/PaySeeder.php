<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->insert([

            [
                "nom"=> "Afghanistan",
                "code"=> "af",
                "phone_code"=> "+93",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Albanie",
                "code"=> "al",
                "phone_code"=> "+355",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Antarctique",
                "code"=> "aq",
                "phone_code"=> "+672",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Algérie",
                "code"=> "dz",
                "phone_code"=> "+213",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Samoa Américaines",
                "code"=> "as",
                "phone_code"=> "+1684",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Andorre",
                "code"=> "ad",
                "phone_code"=> "+376",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Angola",
                "code"=> "ao",
                "phone_code"=> "+244",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Antigua-et-Barbuda",
                "code"=> "ag",
                "phone_code"=> "+1268",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Azerbaïdjan",
                "code"=> "az",
                "phone_code"=> "+994",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Argentine",
                "code"=> "ar",
                "phone_code"=> "+54",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Australie",
                "code"=> "au",
                "phone_code"=> "+61",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Autriche",
                "code"=> "at",
                "phone_code"=> "+43",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Bahamas",
                "code"=> "bs",
                "phone_code"=> "+1242",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Bahreïn",
                "code"=> "bh",
                "phone_code"=> "+973",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Bangladesh",
                "code"=> "bd",
                "phone_code"=> "+880",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Arménie",
                "code"=> "am",
                "phone_code"=> "+374",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Barbade",
                "code"=> "bb",
                "phone_code"=> "+1246",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Belgique",
                "code"=> "be",
                "phone_code"=> "+32",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Bermudes",
                "code"=> "bm",
                "phone_code"=> "+1441",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Bhoutan",
                "code"=> "bt",
                "phone_code"=> "+975",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Bolivie",
                "code"=> "bo",
                "phone_code"=> "+591",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Bosnie-Herzégovine",
                "code"=> "ba",
                "phone_code"=> "+387",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Botswana",
                "code"=> "bw",
                "phone_code"=> "+267",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Île Bouvet",
                "code"=> "bv",
                "phone_code"=> "+47",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Brésil",
                "code"=> "br",
                "phone_code"=> "+55",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Belize",
                "code"=> "bz",
                "phone_code"=> "+501",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Territoire Britannique de l''Océan Indien",
                "code"=> "io",
                "phone_code"=> "+246",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Salomon",
                "code"=> "sb",
                "phone_code"=> "+677",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Vierges Britanniques",
                "code"=> "vg",
                "phone_code"=> "+1284",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Brunéi Darussalam",
                "code"=> "bn",
                "phone_code"=> "+673",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Bulgarie",
                "code"=> "bg",
                "phone_code"=> "+359",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Myanmar",
                "code"=> "mm",
                "phone_code"=> "+95",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Burundi",
                "code"=> "bi",
                "phone_code"=> "+257",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Bélarus",
                "code"=> "by",
                "phone_code"=> "+375",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Cambodge",
                "code"=> "kh",
                "phone_code"=> "+855",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Cameroun",
                "code"=> "cm",
                "phone_code"=> "+237",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Canada",
                "code"=> "ca",
                "phone_code"=> "+1",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Cap-vert",
                "code"=> "cv",
                "phone_code"=> "+238",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Caïmanes",
                "code"=> "ky",
                "phone_code"=> "+1345",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République Centrafricaine",
                "code"=> "cf",
                "phone_code"=> "+236",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Sri Lanka",
                "code"=> "lk",
                "phone_code"=> "+94",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Tchad",
                "code"=> "td",
                "phone_code"=> "+235",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Chili",
                "code"=> "cl",
                "phone_code"=> "+56",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Chine",
                "code"=> "cn",
                "phone_code"=> "+86",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Taïwan",
                "code"=> "tw",
                "phone_code"=> "+886",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Île Christmas",
                "code"=> "cx",
                "phone_code"=> "+672",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Cocos (Keeling)",
                "code"=> "cc",
                "phone_code"=> "+672",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Colombie",
                "code"=> "co",
                "phone_code"=> "+57",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Comores",
                "code"=> "km",
                "phone_code"=> "+269",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Mayotte",
                "code"=> "yt",
                "phone_code"=> "+262",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République du Congo",
                "code"=> "cg",
                "phone_code"=> "+242",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République Démocratique du Congo",
                "code"=> "cd",
                "phone_code"=> "+243",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Cook",
                "code"=> "ck",
                "phone_code"=> "+682",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Costa Rica",
                "code"=> "cr",
                "phone_code"=> "+506",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Croatie",
                "code"=> "hr",
                "phone_code"=> "+385",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Cuba",
                "code"=> "cu",
                "phone_code"=> "+53",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Chypre",
                "code"=> "cy",
                "phone_code"=> "+357",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République Tchèque",
                "code"=> "cz",
                "phone_code"=> "+420",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Benin",
                "code"=> "bj",
                "phone_code"=> "+229",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Danemark",
                "code"=> "dk",
                "phone_code"=> "+45",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Dominique",
                "code"=> "dm",
                "phone_code"=> "+1767",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République Dominicaine",
                "code"=> "do",
                "phone_code"=> "+1809",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Équateur",
                "code"=> "ec",
                "phone_code"=> "+593",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "El Salvador",
                "code"=> "sv",
                "phone_code"=> "+503",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Guinée Équatoriale",
                "code"=> "gq",
                "phone_code"=> "+240",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Éthiopie",
                "code"=> "et",
                "phone_code"=> "+251",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Érythrée",
                "code"=> "er",
                "phone_code"=> "+291",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Estonie",
                "code"=> "ee",
                "phone_code"=> "+372",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Féroé",
                "code"=> "fo",
                "phone_code"=> "+298",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles (malvinas) Falkland",
                "code"=> "fk",
                "phone_code"=> "+500",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Géorgie du Sud et les Îles Sandwich du Sud",
                "code"=> "gs",
                "phone_code"=> "+500",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Fidji",
                "code"=> "fj",
                "phone_code"=> "+679",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Finlande",
                "code"=> "fi",
                "phone_code"=> "+358",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Åland",
                "code"=> "ax",
                "phone_code"=> "+358",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "France",
                "code"=> "fr",
                "phone_code"=> "+33",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Guyane Française",
                "code"=> "gf",
                "phone_code"=> "+594",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Polynésie Française",
                "code"=> "pf",
                "phone_code"=> "+689",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Terres Australes Françaises",
                "code"=> "tf",
                "phone_code"=> "+262",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Djibouti",
                "code"=> "dj",
                "phone_code"=> "+253",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Gabon",
                "code"=> "ga",
                "phone_code"=> "+241",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Géorgie",
                "code"=> "ge",
                "phone_code"=> "+995",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Gambie",
                "code"=> "gm",
                "phone_code"=> "+220",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Territoire Palestinien Occupé",
                "code"=> "ps",
                "phone_code"=> "+970",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Allemagne",
                "code"=> "de",
                "phone_code"=> "+49",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Ghana",
                "code"=> "gh",
                "phone_code"=> "+233",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Gibraltar",
                "code"=> "gi",
                "phone_code"=> "+350",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Kiribati",
                "code"=> "ki",
                "phone_code"=> "+686",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Grèce",
                "code"=> "gr",
                "phone_code"=> "+30",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Groenland",
                "code"=> "gl",
                "phone_code"=> "+299",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Grenade",
                "code"=> "gd",
                "phone_code"=> "+1473",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Guadeloupe",
                "code"=> "gp",
                "phone_code"=> "+590",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Guam",
                "code"=> "gu",
                "phone_code"=> "+1671",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Guatemala",
                "code"=> "gt",
                "phone_code"=> "+502",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Guinée",
                "code"=> "gn",
                "phone_code"=> "+224",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Guyana",
                "code"=> "gy",
                "phone_code"=> "+592",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Haïti",
                "code"=> "ht",
                "phone_code"=> "+509",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Heard et Mcdonald",
                "code"=> "hm",
                "phone_code"=> "+672",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Saint-Siège (état de la Cité du Vatican)",
                "code"=> "va",
                "phone_code"=> "+379",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Honduras",
                "code"=> "hn",
                "phone_code"=> "+504",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Hong-Kong",
                "code"=> "hk",
                "phone_code"=> "+852",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Hongrie",
                "code"=> "hu",
                "phone_code"=> "+36",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Islande",
                "code"=> "is",
                "phone_code"=> "+354",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Inde",
                "code"=> "in",
                "phone_code"=> "+91",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Indonésie",
                "code"=> "id",
                "phone_code"=> "+62",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République Islamique d''Iran",
                "code"=> "ir",
                "phone_code"=> "+98",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Iraq",
                "code"=> "iq",
                "phone_code"=> "+964",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Irlande",
                "code"=> "ie",
                "phone_code"=> "+353",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Israël",
                "code"=> "il",
                "phone_code"=> "+972",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Italie",
                "code"=> "it",
                "phone_code"=> "+39",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Côte d''Ivoire",
                "code"=> "ci",
                "phone_code"=> "+225",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Jamaïque",
                "code"=> "jm",
                "phone_code"=> "+1876",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Japon",
                "code"=> "jp",
                "phone_code"=> "+81",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Kazakhstan",
                "code"=> "kz",
                "phone_code"=> "+7",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Jordanie",
                "code"=> "jo",
                "phone_code"=> "+962",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Kenya",
                "code"=> "ke",
                "phone_code"=> "+254",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République Populaire Démocratique de Corée",
                "code"=> "kp",
                "phone_code"=> "+850",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République de Corée",
                "code"=> "kr",
                "phone_code"=> "+82",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Koweït",
                "code"=> "kw",
                "phone_code"=> "+965",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Kirghizistan",
                "code"=> "kg",
                "phone_code"=> "+996",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République Démocratique Populaire Lao",
                "code"=> "la",
                "phone_code"=> "+856",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Liban",
                "code"=> "lb",
                "phone_code"=> "+961",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Lesotho",
                "code"=> "ls",
                "phone_code"=> "+266",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Lettonie",
                "code"=> "lv",
                "phone_code"=> "+371",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Libéria",
                "code"=> "lr",
                "phone_code"=> "+231",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Jamahiriya Arabe Libyenne",
                "code"=> "ly",
                "phone_code"=> "+218",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Liechtenstein",
                "code"=> "li",
                "phone_code"=> "+423",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Lituanie",
                "code"=> "lt",
                "phone_code"=> "+370",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Luxembourg",
                "code"=> "lu",
                "phone_code"=> "+352",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Macao",
                "code"=> "mo",
                "phone_code"=> "+853",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Madagascar",
                "code"=> "mg",
                "phone_code"=> "+261",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Malawi",
                "code"=> "mw",
                "phone_code"=> "+265",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Malaisie",
                "code"=> "my",
                "phone_code"=> "+60",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Maldives",
                "code"=> "mv",
                "phone_code"=> "+960",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Mali",
                "code"=> "ml",
                "phone_code"=> "+223",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Malte",
                "code"=> "mt",
                "phone_code"=> "+356",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Martinique",
                "code"=> "mq",
                "phone_code"=> "+596",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Mauritanie",
                "code"=> "mr",
                "phone_code"=> "+222",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Maurice",
                "code"=> "mu",
                "phone_code"=> "+230",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Mexique",
                "code"=> "mx",
                "phone_code"=> "+52",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Monaco",
                "code"=> "mc",
                "phone_code"=> "+377",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Mongolie",
                "code"=> "mn",
                "phone_code"=> "+976",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République de Moldavie",
                "code"=> "md",
                "phone_code"=> "+373",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Montserrat",
                "code"=> "ms",
                "phone_code"=> "+1664",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Maroc",
                "code"=> "ma",
                "phone_code"=> "+212",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Mozambique",
                "code"=> "mz",
                "phone_code"=> "+258",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Oman",
                "code"=> "om",
                "phone_code"=> "+968",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Namibie",
                "code"=> "na",
                "phone_code"=> "+264",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Nauru",
                "code"=> "nr",
                "phone_code"=> "+674",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Népal",
                "code"=> "np",
                "phone_code"=> "+977",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Pays-Bas",
                "code"=> "nl",
                "phone_code"=> "+31",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Antilles Néerlandaises",
                "code"=> "an",
                "phone_code"=> "+599",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Aruba",
                "code"=> "aw",
                "phone_code"=> "+297",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Nouvelle-Calédonie",
                "code"=> "nc",
                "phone_code"=> "+687",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Vanuatu",
                "code"=> "vu",
                "phone_code"=> "+678",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Nouvelle-Zélande",
                "code"=> "nz",
                "phone_code"=> "+64",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Nicaragua",
                "code"=> "ni",
                "phone_code"=> "+505",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Niger",
                "code"=> "ne",
                "phone_code"=> "+227",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Nigéria",
                "code"=> "ng",
                "phone_code"=> "+234",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Niué",
                "code"=> "nu",
                "phone_code"=> "+683",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Île Norfolk",
                "code"=> "nf",
                "phone_code"=> "+6723",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Norvège",
                "code"=> "no",
                "phone_code"=> "+47",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Mariannes du Nord",
                "code"=> "mp",
                "phone_code"=> "+1",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Mineures Éloignées des États-Unis",
                "code"=> "um",
                "phone_code"=> "+1",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "États Fédérés de Micronésie",
                "code"=> "fm",
                "phone_code"=> "+691",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Marshall",
                "code"=> "mh",
                "phone_code"=> "+692",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Palaos",
                "code"=> "pw",
                "phone_code"=> "+680",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Pakistan",
                "code"=> "pk",
                "phone_code"=> "+92",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Panama",
                "code"=> "pa",
                "phone_code"=> "+507",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Papouasie-Nouvelle-Guinée",
                "code"=> "pg",
                "phone_code"=> "+675",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Paraguay",
                "code"=> "py",
                "phone_code"=> "+595",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Pérou",
                "code"=> "pe",
                "phone_code"=> "+51",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Philippines",
                "code"=> "ph",
                "phone_code"=> "+63",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Pitcairn",
                "code"=> "pn",
                "phone_code"=> "+64",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Pologne",
                "code"=> "pl",
                "phone_code"=> "+48",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Portugal",
                "code"=> "pt",
                "phone_code"=> "+351",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Guinée-Bissau",
                "code"=> "gw",
                "phone_code"=> "+245",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Timor-Leste",
                "code"=> "tl",
                "phone_code"=> "+670",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Porto Rico",
                "code"=> "pr",
                "phone_code"=> "+1787",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Qatar",
                "code"=> "qa",
                "phone_code"=> "+974",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Réunion",
                "code"=> "re",
                "phone_code"=> "+262",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Roumanie",
                "code"=> "ro",
                "phone_code"=> "+40",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Fédération de Russie",
                "code"=> "ru",
                "phone_code"=> "+7",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Rwanda",
                "code"=> "rw",
                "phone_code"=> "+250",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Sainte-Hélène",
                "code"=> "sh",
                "phone_code"=> "+290",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Saint-Kitts-et-Nevis",
                "code"=> "kn",
                "phone_code"=> "+1",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Anguilla",
                "code"=> "ai",
                "phone_code"=> "+1264",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Sainte-Lucie",
                "code"=> "lc",
                "phone_code"=> "+1758",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Saint-Pierre-et-Miquelon",
                "code"=> "pm",
                "phone_code"=> "+508",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Saint-Vincent-et-les Grenadines",
                "code"=> "vc",
                "phone_code"=> "+1784",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Saint-Marin",
                "code"=> "sm",
                "phone_code"=> "+378",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Sao Tomé-et-Principe",
                "code"=> "st",
                "phone_code"=> "+239",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Arabie Saoudite",
                "code"=> "sa",
                "phone_code"=> "+966",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Sénégal",
                "code"=> "sn",
                "phone_code"=> "+221",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Seychelles",
                "code"=> "sc",
                "phone_code"=> "+248",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Sierra Leone",
                "code"=> "sl",
                "phone_code"=> "+232",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Singapour",
                "code"=> "sg",
                "phone_code"=> "+65",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Slovaquie",
                "code"=> "sk",
                "phone_code"=> "+421",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Viet Nam",
                "code"=> "vn",
                "phone_code"=> "+84",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Slovénie",
                "code"=> "si",
                "phone_code"=> "+386",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Somalie",
                "code"=> "so",
                "phone_code"=> "+252",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Afrique du Sud",
                "code"=> "za",
                "phone_code"=> "+27",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Zimbabwe",
                "code"=> "zw",
                "phone_code"=> "+263",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Espagne",
                "code"=> "es",
                "phone_code"=> "+34",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Sahara Occidental",
                "code"=> "eh",
                "phone_code"=> "+212",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Soudan",
                "code"=> "sd",
                "phone_code"=> "+249",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Suriname",
                "code"=> "sr",
                "phone_code"=> "+597",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Svalbard etÎle Jan Mayen",
                "code"=> "sj",
                "phone_code"=> "+47",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Swaziland",
                "code"=> "sz",
                "phone_code"=> "+268",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Suède",
                "code"=> "se",
                "phone_code"=> "+46",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Suisse",
                "code"=> "ch",
                "phone_code"=> "+41",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République Arabe Syrienne",
                "code"=> "sy",
                "phone_code"=> "+963",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Tadjikistan",
                "code"=> "tj",
                "phone_code"=> "+992",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Thaïlande",
                "code"=> "th",
                "phone_code"=> "+66",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Togo",
                "code"=> "tg",
                "phone_code"=> "+228",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Tokelau",
                "code"=> "tk",
                "phone_code"=> "+690",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Tonga",
                "code"=> "to",
                "phone_code"=> "+676",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Trinité-et-Tobago",
                "code"=> "tt",
                "phone_code"=> "+1868",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Émirats Arabes Unis",
                "code"=> "ae",
                "phone_code"=> "+971",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Tunisie",
                "code"=> "tn",
                "phone_code"=> "+216",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Turquie",
                "code"=> "tr",
                "phone_code"=> "+90",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Turkménistan",
                "code"=> "tm",
                "phone_code"=> "+993",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Turks et Caïques",
                "code"=> "tc",
                "phone_code"=> "+1649",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Tuvalu",
                "code"=> "tv",
                "phone_code"=> "+688",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Ouganda",
                "code"=> "ug",
                "phone_code"=> "+256",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Ukraine",
                "code"=> "ua",
                "phone_code"=> "+380",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "L''ex-République Yougoslave de Macédoine",
                "code"=> "mk",
                "phone_code"=> "+389",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Égypte",
                "code"=> "eg",
                "phone_code"=> "+20",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Royaume-Uni",
                "code"=> "gb",
                "phone_code"=> "+44",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Île de Man",
                "code"=> "im",
                "phone_code"=> "+44",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "République-Unie de Tanzanie",
                "code"=> "tz",
                "phone_code"=> "+255",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "États-Unis",
                "code"=> "us",
                "phone_code"=> "+1",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Îles Vierges des États-Unis",
                "code"=> "vi",
                "phone_code"=> "+1",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Burkina Faso",
                "code"=> "bf",
                "phone_code"=> "+226",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Uruguay",
                "code"=> "uy",
                "phone_code"=> "+598",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Ouzbékistan",
                "code"=> "uz",
                "phone_code"=> "+998",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Venezuela",
                "code"=> "ve",
                "phone_code"=> "+58",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Wallis et Futuna",
                "code"=> "wf",
                "phone_code"=> "+681",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Samoa",
                "code"=> "ws",
                "phone_code"=> "+685",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Yémen",
                "code"=> "ye",
                "phone_code"=> "+967",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Serbie-et-Monténégro",
                "code"=> "cs",
                "phone_code"=> "+381",
                "created_at"=>Carbon::now()
            ],
            [
                "nom"=> "Zambie",
                "code"=> "zm",
                "phone_code"=> "+260",
                "created_at"=>Carbon::now()
            ],

        ]);
    }

}
