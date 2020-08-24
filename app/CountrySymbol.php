<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountrySymbol extends Model
{
    protected Static $symbols = [
      'AED' => 'United Arab Emirates Dirham',
      'AED' => 'United Arab Emirates Dirham',
      'AFN' => 'Afghan Afghani',
      'AFN' => 'Afghan Afghani',
      'ALL' => 'Albanian Lek',
      'ALL' => 'Albanian Lek',
      'AMD' => 'Armenian Dram',
      'AMD' => 'Armenian Dram',
      'ANG' => 'Netherlands Antillean Guilder',
      'ANG' => 'Netherlands Antillean Guilder',
      'AOA' => 'Angolan Kwanza',
      'AOA' => 'Angolan Kwanza',
      'ARS' => 'Argentine Peso',
      'ARS' => 'Argentine Peso',
      'AUD' => 'Australian Dollar',
      'AUD' => 'Australian Dollar',
      'AWG' => 'Aruban Florin',
      'AWG' => 'Aruban Florin',
      'AZN' => 'Azerbaijani Manat',
      'AZN' => 'Azerbaijani Manat',
      'BAM' => 'Bosnia-Herzegovina Convertible Mark',
      'BAM' => 'Bosnia-Herzegovina Convertible Mark',
      'BBD' => 'Barbadian Dollar',
      'BBD' => 'Barbadian Dollar',
      'BDT' => 'Bangladeshi Taka',
      'BDT' => 'Bangladeshi Taka',
      'BGN' => 'Bulgarian Lev',
      'BGN' => 'Bulgarian Lev',
      'BHD' => 'Bahraini Dinar',
      'BHD' => 'Bahraini Dinar',
      'BIF' => 'Burundian Franc',
      'BIF' => 'Burundian Franc',
      'BMD' => 'Bermudan Dollar',
      'BMD' => 'Bermudan Dollar',
      'BND' => 'Brunei Dollar',
      'BND' => 'Brunei Dollar',
      'BOB' => 'Bolivian Boliviano',
      'BOB' => 'Bolivian Boliviano',
      'BRL' => 'Brazilian Real',
      'BRL' => 'Brazilian Real',
      'BSD' => 'Bahamian Dollar',
      'BSD' => 'Bahamian Dollar',
      'BTC' => 'Bitcoin',
      'BTC' => 'Bitcoin',
      'BTN' => 'Bhutanese Ngultrum',
      'BTN' => 'Bhutanese Ngultrum',
      'BWP' => 'Botswanan Pula',
      'BWP' => 'Botswanan Pula',
      'BYN' => 'New Belarusian Ruble',
      'BYN' => 'New Belarusian Ruble',
      'BYR' => 'Belarusian Ruble',
      'BYR' => 'Belarusian Ruble',
      'BZD' => 'Belize Dollar',
      'BZD' => 'Belize Dollar',
      'CAD' => 'Canadian Dollar',
      'CAD' => 'Canadian Dollar',
      'CDF' => 'Congolese Franc',
      'CDF' => 'Congolese Franc',
      'CHF' => 'Swiss Franc',
      'CHF' => 'Swiss Franc',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLP' => 'Chilean Peso',
      'CLP' => 'Chilean Peso',
      'CNY' => 'Chinese Yuan',
      'CNY' => 'Chinese Yuan',
      'COP' => 'Colombian Peso',
      'COP' => 'Colombian Peso',
      'CRC' => 'Costa Rican Colón',
      'CRC' => 'Costa Rican Colón',
      'CUC' => 'Cuban Convertible Peso',
      'CUC' => 'Cuban Convertible Peso',
      'CUP' => 'Cuban Peso',
      'CUP' => 'Cuban Peso',
      'CVE' => 'Cape Verdean Escudo',
      'CVE' => 'Cape Verdean Escudo',
      'CZK' => 'Czech Republic Koruna',
      'CZK' => 'Czech Republic Koruna',
      'DJF' => 'Djiboutian Franc',
      'DJF' => 'Djiboutian Franc',
      'DKK' => 'Danish Krone',
      'DKK' => 'Danish Krone',
      'DOP' => 'Dominican Peso',
      'DOP' => 'Dominican Peso',
      'DZD' => 'Algerian Dinar',
      'DZD' => 'Algerian Dinar',
      'EGP' => 'Egyptian Pound',
      'EGP' => 'Egyptian Pound',
      'ERN' => 'Eritrean Nakfa',
      'ERN' => 'Eritrean Nakfa',
      'ETB' => 'Ethiopian Birr',
      'ETB' => 'Ethiopian Birr',
      'EUR' => 'Euro',
      'EUR' => 'Euro',
      'FJD' => 'Fijian Dollar',
      'FJD' => 'Fijian Dollar',
      'FKP' => 'Falkland Islands Pound',
      'FKP' => 'Falkland Islands Pound',
      'GBP' => 'British Pound Sterling',
      'GBP' => 'British Pound Sterling',
      'GEL' => 'Georgian Lari',
      'GEL' => 'Georgian Lari',
      'GGP' => 'Guernsey Pound',
      'GGP' => 'Guernsey Pound',
      'GHS' => 'Ghanaian Cedi',
      'GHS' => 'Ghanaian Cedi',
      'GIP' => 'Gibraltar Pound',
      'GIP' => 'Gibraltar Pound',
      'GMD' => 'Gambian Dalasi',
      'GMD' => 'Gambian Dalasi',
      'GNF' => 'Guinean Franc',
      'GNF' => 'Guinean Franc',
      'GTQ' => 'Guatemalan Quetzal',
      'GTQ' => 'Guatemalan Quetzal',
      'GYD' => 'Guyanaese Dollar',
      'GYD' => 'Guyanaese Dollar',
      'HKD' => 'Hong Kong Dollar',
      'HKD' => 'Hong Kong Dollar',
      'HNL' => 'Honduran Lempira',
      'HNL' => 'Honduran Lempira',
      'HRK' => 'Croatian Kuna',
      'HRK' => 'Croatian Kuna',
      'HTG' => 'Haitian Gourde',
      'HTG' => 'Haitian Gourde',
      'HUF' => 'Hungarian Forint',
      'HUF' => 'Hungarian Forint',
      'IDR' => 'Indonesian Rupiah',
      'IDR' => 'Indonesian Rupiah',
      'ILS' => 'Israeli New Sheqel',
      'ILS' => 'Israeli New Sheqel',
      'IMP' => 'Manx pound',
      'IMP' => 'Manx pound',
      'INR' => 'Indian Rupee',
      'INR' => 'Indian Rupee',
      'IQD' => 'Iraqi Dinar',
      'IQD' => 'Iraqi Dinar',
      'IRR' => 'Iranian Rial',
      'IRR' => 'Iranian Rial',
      'ISK' => 'Icelandic Króna',
      'ISK' => 'Icelandic Króna',
      'JEP' => 'Jersey Pound',
      'JEP' => 'Jersey Pound',
      'JMD' => 'Jamaican Dollar',
      'JMD' => 'Jamaican Dollar',
      'JOD' => 'Jordanian Dinar',
      'JOD' => 'Jordanian Dinar',
      'JPY' => 'Japanese Yen',
      'JPY' => 'Japanese Yen',
      'KES' => 'Kenyan Shilling',
      'KES' => 'Kenyan Shilling',
      'KGS' => 'Kyrgystani Som',
      'KGS' => 'Kyrgystani Som',
      'KHR' => 'Cambodian Riel',
      'KHR' => 'Cambodian Riel',
      'KMF' => 'Comorian Franc',
      'KMF' => 'Comorian Franc',
      'KPW' => 'North Korean Won',
      'KPW' => 'North Korean Won',
      'KRW' => 'South Korean Won',
      'KRW' => 'South Korean Won',
      'KWD' => 'Kuwaiti Dinar',
      'KWD' => 'Kuwaiti Dinar',
      'KYD' => 'Cayman Islands Dollar',
      'KYD' => 'Cayman Islands Dollar',
      'KZT' => 'Kazakhstani Tenge',
      'KZT' => 'Kazakhstani Tenge',
      'LAK' => 'Laotian Kip',
      'LAK' => 'Laotian Kip',
      'LBP' => 'Lebanese Pound',
      'LBP' => 'Lebanese Pound',
      'LKR' => 'Sri Lankan Rupee',
      'LKR' => 'Sri Lankan Rupee',
      'LRD' => 'Liberian Dollar',
      'LRD' => 'Liberian Dollar',
      'LSL' => 'Lesotho Loti',
      'LSL' => 'Lesotho Loti',
      'LTL' => 'Lithuanian Litas',
      'LTL' => 'Lithuanian Litas',
      'LVL' => 'Latvian Lats',
      'LVL' => 'Latvian Lats',
      'LYD' => 'Libyan Dinar',
      'LYD' => 'Libyan Dinar',
      'MAD' => 'Moroccan Dirham',
      'MAD' => 'Moroccan Dirham',
      'MDL' => 'Moldovan Leu',
      'MDL' => 'Moldovan Leu',
      'MGA' => 'Malagasy Ariary',
      'MGA' => 'Malagasy Ariary',
      'MKD' => 'Macedonian Denar',
      'MKD' => 'Macedonian Denar',
      'MMK' => 'Myanma Kyat',
      'MMK' => 'Myanma Kyat',
      'MNT' => 'Mongolian Tugrik',
      'MNT' => 'Mongolian Tugrik',
      'MOP' => 'Macanese Pataca',
      'MOP' => 'Macanese Pataca',
      'MRO' => 'Mauritanian Ouguiya',
      'MRO' => 'Mauritanian Ouguiya',
      'MUR' => 'Mauritian Rupee',
      'MUR' => 'Mauritian Rupee',
      'MVR' => 'Maldivian Rufiyaa',
      'MVR' => 'Maldivian Rufiyaa',
      'MWK' => 'Malawian Kwacha',
      'MWK' => 'Malawian Kwacha',
      'MXN' => 'Mexican Peso',
      'MXN' => 'Mexican Peso',
      'MYR' => 'Malaysian Ringgit',
      'MYR' => 'Malaysian Ringgit',
      'MZN' => 'Mozambican Metical',
      'MZN' => 'Mozambican Metical',
      'NAD' => 'Namibian Dollar',
      'NAD' => 'Namibian Dollar',
      'NGN' => 'Nigerian Naira',
      'NGN' => 'Nigerian Naira',
      'NIO' => 'Nicaraguan Córdoba',
      'NIO' => 'Nicaraguan Córdoba',
      'NOK' => 'Norwegian Krone',
      'NOK' => 'Norwegian Krone',
      'NPR' => 'Nepalese Rupee',
      'NPR' => 'Nepalese Rupee',
      'NZD' => 'New Zealand Dollar',
      'NZD' => 'New Zealand Dollar',
      'OMR' => 'Omani Rial',
      'OMR' => 'Omani Rial',
      'PAB' => 'Panamanian Balboa',
      'PAB' => 'Panamanian Balboa',
      'PEN' => 'Peruvian Nuevo Sol',
      'PEN' => 'Peruvian Nuevo Sol',
      'PGK' => 'Papua New Guinean Kina',
      'PGK' => 'Papua New Guinean Kina',
      'PHP' => 'Philippine Peso',
      'PHP' => 'Philippine Peso',
      'PKR' => 'Pakistani Rupee',
      'PKR' => 'Pakistani Rupee',
      'PLN' => 'Polish Zloty',
      'PLN' => 'Polish Zloty',
      'PYG' => 'Paraguayan Guarani',
      'PYG' => 'Paraguayan Guarani',
      'QAR' => 'Qatari Rial',
      'QAR' => 'Qatari Rial',
      'RON' => 'Romanian Leu',
      'RON' => 'Romanian Leu',
      'RSD' => 'Serbian Dinar',
      'RSD' => 'Serbian Dinar',
      'RUB' => 'Russian Ruble',
      'RUB' => 'Russian Ruble',
      'RWF' => 'Rwandan Franc',
      'RWF' => 'Rwandan Franc',
      'SAR' => 'Saudi Riyal',
      'SAR' => 'Saudi Riyal',
      'SBD' => 'Solomon Islands Dollar',
      'SBD' => 'Solomon Islands Dollar',
      'SCR' => 'Seychellois Rupee',
      'SCR' => 'Seychellois Rupee',
      'SDG' => 'Sudanese Pound',
      'SDG' => 'Sudanese Pound',
      'SEK' => 'Swedish Krona',
      'SEK' => 'Swedish Krona',
      'SGD' => 'Singapore Dollar',
      'SGD' => 'Singapore Dollar',
      'SHP' => 'Saint Helena Pound',
      'SHP' => 'Saint Helena Pound',
      'SLL' => 'Sierra Leonean Leone',
      'SLL' => 'Sierra Leonean Leone',
      'SOS' => 'Somali Shilling',
      'SOS' => 'Somali Shilling',
      'SRD' => 'Surinamese Dollar',
      'SRD' => 'Surinamese Dollar',
      'STD' => 'São Tomé and Príncipe Dobra',
      'STD' => 'São Tomé and Príncipe Dobra',
      'SVC' => 'Salvadoran Colón',
      'SVC' => 'Salvadoran Colón',
      'SYP' => 'Syrian Pound',
      'SYP' => 'Syrian Pound',
      'SZL' => 'Swazi Lilangeni',
      'SZL' => 'Swazi Lilangeni',
      'THB' => 'Thai Baht',
      'THB' => 'Thai Baht',
      'TJS' => 'Tajikistani Somoni',
      'TJS' => 'Tajikistani Somoni',
      'TMT' => 'Turkmenistani Manat',
      'TMT' => 'Turkmenistani Manat',
      'TND' => 'Tunisian Dinar',
      'TND' => 'Tunisian Dinar',
      'TOP' => 'Tongan Paʻanga',
      'TOP' => 'Tongan Paʻanga',
      'TRY' => 'Turkish Lira',
      'TRY' => 'Turkish Lira',
      'TTD' => 'Trinidad and Tobago Dollar',
      'TTD' => 'Trinidad and Tobago Dollar',
      'TWD' => 'New Taiwan Dollar',
      'TWD' => 'New Taiwan Dollar',
      'TZS' => 'Tanzanian Shilling',
      'TZS' => 'Tanzanian Shilling',
      'UAH' => 'Ukrainian Hryvnia',
      'UAH' => 'Ukrainian Hryvnia',
      'UGX' => 'Ugandan Shilling',
      'UGX' => 'Ugandan Shilling',
      'USD' => 'United States Dollar',
      'USD' => 'United States Dollar',
      'UYU' => 'Uruguayan Peso',
      'UYU' => 'Uruguayan Peso',
      'UZS' => 'Uzbekistan Som',
      'UZS' => 'Uzbekistan Som',
      'VEF' => 'Venezuelan Bolívar Fuerte',
      'VEF' => 'Venezuelan Bolívar Fuerte',
      'VND' => 'Vietnamese Dong',
      'VND' => 'Vietnamese Dong',
      'VUV' => 'Vanuatu Vatu',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Samoan Tala',
      'WST' => 'Samoan Tala',
      'XAF' => 'CFA Franc BEAC',
      'XAF' => 'CFA Franc BEAC',
      'XAG' => 'Silver (troy ounce)',
      'XAG' => 'Silver (troy ounce)',
      'XAU' => 'Gold (troy ounce)',
      'XAU' => 'Gold (troy ounce)',
      'XCD' => 'East Caribbean Dollar',
      'XCD' => 'East Caribbean Dollar',
      'XDR' => 'Special Drawing Rights',
      'XDR' => 'Special Drawing Rights',
      'XOF' => 'CFA Franc BCEAO',
      'XOF' => 'CFA Franc BCEAO',
      'XPF' => 'CFP Franc',
      'XPF' => 'CFP Franc',
      'YER' => 'Yemeni Rial',
      'YER' => 'Yemeni Rial',
      'ZAR' => 'South African Rand',
      'ZAR' => 'South African Rand',
      'ZMK' => 'Zambian Kwacha (pre-2013)',
      'ZMK' => 'Zambian Kwacha (pre-2013)',
      'ZMW' => 'Zambian Kwacha',
      'ZMW' => 'Zambian Kwacha',
      'ZWL' => 'Zimbabwean Dollar',
      'ZWL' => 'Zimbabwean Dollar',
    ];

    /**
    * Get full array of countries and codes
    *
    * @return array
    */
   public static function getSymbols()
   {
       return static::$symbols;
   }
}
