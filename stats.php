<?php
	error_reporting(-1);
	$xml = simplexml_load_file('babylXML.xml');
   	$name = (string) $xml->NAME;
	$type = (string) $xml->TYPE;
	$fullname = (string) $xml->FULLNAME;
	$motto = (string) $xml->MOTTO;
	$cat = (string) $xml->CATEGORY;
	$WA_BIN = (string) $xml->UNSTATUS;
	$civil = (string) $xml->FREEDOM->CIVILRIGHTS;
	$econ = (string) $xml->FREEDOM->ECONOMY;
	$polit = (string) $xml->FREEDOM->POLITICALFREEDOM;
	$region = (string) $xml->REGION;
	$tax = (string) $xml->TAX;
	$natAnimal = (string) $xml->ANIMAL;
	$currency = (string) $xml->CURRENCY;
	$demN = (string) $xml->DEMONYM;
	$demAdj = (string) $xml->DEMONYM2;
	$demPN = (string) $xml->DEMONYM2PLURAL;
	$flag = (string) $xml->FLAG; //Might not work?
	$majIndus = (string) $xml->MAJORINDUSTRY;
	$govPri = (string) $xml->GOVTPRIORITY;
	$govAdmin = (string) $xml->GOVT->ADMINISTRATION;
	$govDefence = (string) $xml->GOVT->DEFENCE;
	$govEdu = (string) $xml->GOVT->EDUCATION;
	$govEnvi = (string) $xml->GOVT->ENVIROMENT;
	$govHealth = (string) $xml->GOVT->HEALTHCARE;
	$govCom = (string) $xml->GOVT->COMMERCE;
	$govLaw = (string) $xml->GOVT->LAWANDORDER;
	$govTrans = (string) $xml->GOVT->PUBLICTRANSPORT;
	$govEqu = (string) $xml->GOVT->SOCIALEQUALITY;
	$govSpirit = (string) $xml->GOVT->SPIRITUALITY;
	$govWelfare = (string) $xml->GOVT->WELFARE;
	$age = (string) $xml->FOUNDED;
	$firstLog = (string) $xml->FIRSTLOGIN;
	$lastLog = (string) $xml->LASTLOGIN;
	$lastAct = (string) $xml->LASTACTIVITY;
	$inf = (string) $xml->INFLUENCE;
	$civilScore = (string) $xml->FREEDOMSCORES->CIVILRIGHTS;
	$econScore = (string) $xml->FREEDOMSCORES->ECONOMY;
	$polScore = (string) $xml->FREEDOMSCORES->POLITICALFREEDOMS;
	$pubSec = (string) $xml->PUBLICSECTOR;
	$privSec = 100 - $pubSec;
	//$deaths we are leaving out for now.
	$leader = (string) $xml->LEADER;
	$cap = (string) $xml->CAPITAL;
	$religon = (string) $xml->RELIGION;
	$factCount = (string) $xml->FACTBOOKS;
	$dispCount = (string) $xml->DISPATCHES;

//SECONDSHEET
	$xml = simplexml_load_file('statXML.xml');
	$population = (string) $xml->POPULATION;
	$defcon = (string) $xml->MILT->DEFCON;
	$forces = round($population / $govDefence);
	$resForces = round($forces / 10);
	$actForces = round($forces - $resForces);
	$infantry = round($forces / 4);
	$medics = round($infantry / 40);
	$engineers = round($infantry / 40);
	$officers = round($forces / 20);
	$marines = round($forces / 10);
	$sforces = round($forces / 10);
	$MP = round($forces / 40);
	$MIA = round($forces / 40);
	$AT = round($forces / 20);
	$calvary = round($forces / 10);
	$resForces = round($forces / 10);

	$navy = round($forces / 5);
	$navyReserve = round($navy / 10);
	$navyActive = round($navy - $navyReserve);
	
	$NSF = round($navy / 5);
	$staff = round($navy / 5);
	$perFleet = (string) $xml->MILT->NAVY->FLEET->PER;
	$class1 = (string) $xml->MILT->NAVY->FLEET->CLASS1;
	$class2 = (string) $xml->MILT->NAVY->FLEET->CLASS2;
	$class3 = (string) $xml->MILT->NAVY->FLEET->CLASS3;
	$class4 = (string) $xml->MILT->NAVY->FLEET->CLASS4;
	$class5 = (string) $xml->MILT->NAVY->FLEET->CLASS5;
	$class6 = (string) $xml->MILT->NAVY->FLEET->CLASS6;
	$class7 = (string) $xml->MILT->NAVY->FLEET->CLASS7;
	$sub = (string) $xml->MILT->NAVY->FLEET->CLASS8;
	$class9 = (string) $xml->MILT->NAVY->FLEET->CLASS9;
	$class10 = (string) $xml->MILT->NAVY->FLEET->CLASS10;
	$classAll = (string) $xml->MILT->NAVY->FLEET->CLASSALL;
	$fleetCount = 500;

	$missilebases = (string) $xml->MILT->DEFNET->MISSILEBASE;
	$ICBM = (string) $xml->MILT->DEFNET->ICBM->TOTAL;
	$ballistic = (string) $xml->MILT->DEFNET->ICBM->BALLISTIC;
	$thermobaric = (string) $xml->MILT->DEFNET->ICBM->THERMOBARIC;
	$conventional = (string) $xml->MILT->DEFNET->ICBM->CONVENTIONAL;
	$antiair = (string) $xml->MILT->DEFNET->ICBM->ANTIAIR;
	$incendiary = (string) $xml->MILT->DEFNET->ICBM->INCENDIARY;
	$nukes = (string) $xml->MILT->DEFNET->ICBM->NUKE;
?>