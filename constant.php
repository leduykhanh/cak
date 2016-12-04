<?php
$raMembers = array(
	"name1" => "W. K. Chan",
	"name2" => "Liang Kan Fat",
	"" => ""
);
$raDesignations = array(
	"name1" => "Manager",
	"name2" => "Foreman",
	"" => ""
);
$raSinatures = array(
	"name1" => "chan.png",
	"name2" => "fat.png",
);
$harzard = array(
	"w_h_l_3m"	=> "Hazard -Working at height (less than 3m)",
	"w_h_m_3m"	=> "Working at height (more than 3m)",
	"p_h_s_o"	=> "Physical hazards (sharp objects)",
	"c_h"		=> "Chemical hazards",
	"f_o"		=> "Falling objects",
	"e_h"		=> "Electrical hazard",
	"e_r_h"		=> "Ergonomic hazards",
	"s_t_f_h"	=> "Slip,trip fall",
	"c_s_h" 	=> "Confined space",
	"f_h"		=> "Fire Hazard",
	"g_h"		=> "Gas Hazard",
	"b_w_l" => "Bad Weather (lightning)",
	"b_w_h_w" => "Bad weather (Hot weather)",
	"b_w_h" => "Bad weather (haze)",
	"w_u_q_t" => "Working/unloading with traffic",
	"r_d" => "Reckless driving",
	"h_l_b_m_h" => "Heavy load by manual handling",
	"m_o_u_g" => "material on uneven ground (unstable)",
	"w_a_h_b" => "Working at height (using boomlift)",
	"w_a_h_s" => "Working at height (using sisscor lift)",
	"w_a_h_sf" => "Working at height (using scaffold)",
	"p_p_f_l_o" => "Poor planning for lfting operation",
	"f_p" => "Flying particles",
	"w_a_h_t" => "Working around heavy traffic",
	"w_i_t_t" => "Working in train tunnel(electrical hazards)",
	"u_s_c_m_v" => "Unsafe site condition ( moving vehicles)",
	"u_s_c_f_o" => "Unsafe site condition (Falling object)",
	"u_s_c_l" => "Unsafe site condition (locomotive)",
	"u_s_c_w_a_h" => "Unsafe site condition (working at height)",
	"u_s_c_r_a_i" => "Unsafe site condition (Reptiles and Insects)",
	"u_s_c_w_n_d_w" => "Unsafe site condition (working near deep water)",
	"n_w_p_v" => "Night work (poor visibility)",
	"other" => "Other"
);
$injury =array(
				"0"=>"Fatality",
				"1"=>"Multiple major injuries",
				"2"=>"Damaged to surrounding property",
				"3"=>"Serious bodily injuries",
				"4"=>"Occupational disease",
				"5"=>"Life-threatening occupational disease",
				"6"=>"Minor fractures",
				"7"=>"Deafness",
				"8"=>"Sprains",
				"9"=>"Irritation",
				"10"=>"Minor cuts"
);
$severity = array(
				"0"=>"5",
				"1"=>"5",
				"2"=>"5",
				"3"=>"4",
				"4"=>"4",
				"5"=>"4",
				"6"=>"3",
				"7"=>"3",
				"8"=>"3",
				"9"=>"2",
				"10"=>"2"
);
$existing_risk_control=array(
	"w_h_l_3m" => array(
				"0" => "Donned safety harness with 100% tie off",
				"1" => "Use of portable access platform",
				"2" => "Use of access gangway",
				"3" => "Use of effective safety travel restrain system",
				"4" => "Buddy system to support ladder",
				"5" => "Use of approved scaffold",
				"6" => "Install Edge Protection",
				"7" => "Install Perimeter Guard-Railing",
				"8" => "Use of handrails",
				"9" => "Proper demarcation to be in placed",
				"10" => "Opening to be fully covered",
				"11" => "Warning signs to be provided",
				"12" => "Use of working platform with proper guardrail to prevent fall",
				"13" => "Training to prevent workers from working outside the railing",
				"14" => "Use of self retracting lifeline and to be above worker head",
				"15" => "Pre inspection of fall prevention/arrest PPE",
				"16" => "Ensure that the free fall distance is sufficient for the safety harness",
				"17" => "Proper maintenance of the PPE to be carried out monthly",
				"18" => "Briefing to be conducted before start of work",
				"19" => "Emergency Rescue Plan to be briefed to all WAH personnel",
				"20" => "WAH personnel to be trained and briefed",
				"21" => "Only worker with more than 1 years of relevant experience are allowed to work",
				"22" => "Onsite supervison and frequent inspection and training",
				),
	"w_h_m_3m" => array(
				"0" => "Donned safety harness with 100% tie off",
				"1" => "Subsitute with portable access platform",
				"2" => "Use of access gangway",
				"3" => "Use of effective safety travel restrain system",
				"4" => "Buddy system to support ladder",
				"5" => "Use of approved scaffold with proper access and egress",
				"6" => "Install Edge Protection",
				"7" => "Install Perimeter Guard-Railing",
				"8" => "Use of handrails",
				"9" => "Proper demarcation to be in placed",
				"10" => "Opening to be fully covered",
				"11" => "Warning signs to be provided",
				"12" => "Use of working platform with proper guardrail to prevent fall",
				"13" => "Training to prevent workers from working outside the railing",
				"14" => "Use of self retracting lifeline and to be above worker head",
				"15" => "Pre inspection of fall prevention/arrest PPE",
				"16" => "Ensure that the free fall distance is sufficient for the safety harness",
				"17" => "Proper maintenance of the PPE to be carried out monthly",
				"18" => "Briefing to be conducted before start of work",
				"19" => "Emergency Rescue Plan to be briefed to all WAH personnel",
				"20" => "WAH personnel to be trained and briefed",
				"21" => "Only worker with more than 1 years of relevant experience are allowed to work",
				"22" => "WAH permit to work shall be approved before starting work",
				"23" => "Onsite supervison and frequent inspection and training",
				),
	"p_h_s_o" => array(
				"0" => "Install barricade", 
				"1" => "Remove sharp edges before delivery to site",
				"2" => "Use of insulation covers to prevent direct contact",
				"3" => "Use of hand gloves", 
				"4" => "Use of anti cut hand gloves",
				"5" => "Proper safety training to be provided", 
				"6" => "Only worker with more than 1 years of relevant experience are allowed to carry out this activity",
				"7" => "Prevent machine guards",
				"8" => "Machine inspection to ensure hand guards are not removed",
				"9" => "Onsite supervison and frequent inspection and training",
				"10" => "Use of machine guards. Supervisor to inspect tools to ensure no tamper of machine guard",
				"11" => "No use of self modified tools",
				),

	"c_h" => array(
				"0" => "Only trained personnel are allowed to use the chemical", 
				"1" => "Understand the hazards of the SDS before start of work", 
				"2" => "Reduce the use of the chemical if necessary", 
				"3" => "Chemical to be labelled and hazards briefed to all working personnel", 
				"4" => "Use of proper chemical glove", 
				"5" => "Proper ventilation to prevent stagnant chemical build up", 
				"6" => "Chemical to be stored at proper chemical storage area", 
				"7" => "Fire Extinguisher to be provided", 
				"8" => "Use of respirator mask", 
				"9" => "Use of safety goggles, Supervisor to ensure and check", 
				"10" => "On site direct supervison", 
				"11" => "Buddy System to be in placed", 
				),
	"f_o" => array(
				"0" => "Overhead shelter to be installed",
				"1" => "warning signs to be displayed to warn others of the work above",
				"2" => "Safety net to be provided to catch unintended debris/material",
				"3" => "Hoard up area to prevent personel entering area with falling objects",
				"4" => "To put on safety helmet with chin strap",
				"5" => "Toolbag to store all tools and equipments when working at height",
				"6" => "Attach ropes on all tools used when working at height to prevent falling",
				),
	"e_h" => array(
				"0" => "Use of battery powered equipment",
				"1" => "Only competent personnel are allowed to carry out this work activity",
				"2" => "Implement lock out tag out system",
				"3" => "Isolate the power supply before starting the maintenance",
				"4" => "Licensed electrical worker to inspect the electrical tools/equipment monthly",
				"5" => "Proper maintenance of the electrical tools and equipment",
				"6" => "Use of industrial plug",
				"7" => "Do a test to the power supply to make sure that the power has de energized before starting work",
				"8" => "Do not place electrical tools near or at water source",
				"9" => "use of safety gloves and safety boots",
				),
	"e_r_h" => array(
				"0" => "Proper manual lifting posture to be adopted and practiced",
				"1" => "Use of tools and equipment to assist in the work",
				"2" => "Modify working platform to suit better work posture",
				"3" => "Frequent breaks ",
				"4" => "Constant review of working posture",
				"5" => "Ensure lighting is adequate.",
				"6" => "Proper ventilation are avaliable",
				),
	"s_t_f_h" => array(
				"0" => "Housekeeping- materials/tools/ equipment to be stored at storage area",
                "1" => "Proper cable management - prevent cables from lying around the walkway",
                "2" => "Remove water from wet surface",
                "3" => "Lay anti slip mat on slippery surfaces",
                "4" => "Paint object that are tripping hazard in yellow and black",
                "5" => "Put up signages to warn others about the tripping hazards",
                "6" => "Toolbox to store all tools and equipment",
                "7" => "Container to be provided for storing tools and equipment",
                "8" => "Corden off storage area",
                "9" => "Housekeeping to be done every hour",
				),
	"c_s_h" => array(
				"0" => "Implement permit to work system",
				"1" => "A gas test to be done by a competent confined space safety assessor before entry",
				"2" => "Emergency Response Plan planned and and brief all ",
				"3" => "Mechanical ventilation provided",
				"4" => "Gas test to be done before and 30 minutes after ventilation",
				"5" => "Only 110V Electrical tools/equipment are allowed in the confined space",
				"6" => "Use of calibrated multi gas meter- inspection of certificate before use",
				"7" => "Explosion proof lights to be used in the confined space",
				"8" => "Rescue equipment to be set up before allowing anyone to enter the confined space",
				"9" => "Ventilate confined space till gas reading as safe for entry",
				"10" => "Lock out tag out valves and pumps in the confined space",
				"11" => "Re test of confined space every 6 hours and/or if vacant for 30 minutes",
				"12" => "Gas meter to be brought into the confined space for gas monitoring", 
				),

	"f_h" => array(
				"0" => "Ensure no incompatible work are carried out",
				"1" => "Fire extinguisher to be readily available with fire watcher",
				"2" => "Place fire blanket on the spark landing area",
				"3" => "Remove all fire hazard material away from work area",
				"4" => "Use of fire resistant jacket",
				"5" => "Inspect the gas cylinder before use",
				"6" => "Ensure gas hoses have no leaks by doing a soap test",
				"7" => "Use of flame arrestor",
				"8" => "Use of gas regulator and check valves",
				"9" => "Flammable gas to be purged or reduce to its LEL", 
				"10" => "No naked flame to be used",
				"11" => "Only use explosion proof equipment",
				),
	"g_h" => array(
				"0" => "SDS of the gas should be understood and briefed",
				"1" => "Proper ventilation to remove gas from building up",
				"2" => "Only trained personnel are to handle the gas",
				"3" => "Use of gas meter to test for leakage of gas",
				"4" => "Testing of leakge using soap test",
				"5" => "Use of gas mask /respirator to prevent inhalation of toxic gas",
				"6" => "Gas meter shall be calibrated and maintained",
				"7" => "Fire Extinguisher to be readily available",
				),
	"b_w_l" => array (
				"0" => "Ensure lightning protection is available for work area",
				"1" => "Ensure proper access and egress to be ready in case of evacuation",
				"2" => "Brief workers on the site warning siren",
				"3" => "Supervisor to use of lightning@sg mobile app to be informed of weather status",
				"4" => "Stop all outdoor work and seek shelter immediately",
			),
	"b_w_h_w" => array(
				"0" => "Provide temporary sun screen/shelter if work duration is long",
				"1" => "Provide frequent water breaks", 
				"2" => "Supervisor to check on workers condition", 
				"3" => "Brief all workers on the symptoms of heat injuries  during toolbox meeting",
				"4" => "Reschedule work to early morning or late night",
				"5" => "Use of blower fan to cool them down",
			),
	"b_w_h" => array(
				"0" => "Provide frequent water breaks", 
				"1" => "Check on workers health status every 1 hour",
				"2" => "All working personnel shall be issued with N95 face mask and enforce to wear",
				"3" => "If PSI reading hits 300, all work shall stop immediately and seek shelter",
				"4" => "All working personnel with respiratory problems shall be carefully monitored or excused from outdoor work",
		),
	"w_u_q_t"	 => array(
				"0" =>	"Set up traffic cones and barrier to demarcate work area",
				"1" =>	"Set up warning signs to warn others of the work ahead",
				"2" =>	"Traffic controller to slow down traffic or redirect traffic",
				"3" =>	"Hoard up unloading area and redirect traffic",
				"4" =>	"Brief on the risk assessment and SWP",
				"5" =>	"Use of truck mounted attenuator to prevent vehicle from crashing into work area",
				"6" =>	"Use of traffic mannequin to slow others",
				"7" =>	"Working personnel to put on reflective vest at all time",
				"8" =>	"Put up the warning signs according to the road closure permit",
	),
	"r_d" => array(
				"0" =>	"install speed limit siren to warn drivers",
				"1" =>	"brief on risk assessment and SWP",
				"2" =>	"Warning signs to inform drivers of the speed limit",
				"3" =>	"Drivers to be accompanied with a supervisor",
				"4" =>	"warnings and Inhouse fines to be given for reckless drivers",
				"5" =>	"company contact number to be on the vehicle",
				"6" =>	"Toolbox meeting to brief on the work area",
				"7" =>	"Traffic controller to guide the lorry into unloading position",
				"8" =>	"Supervisor to ensure drivers are not influenced by drugs or alcohol",
	),
	"h_l_b_m_h" => array(
				"0" =>	"Use of equipment instead of man power",
				"1" =>	"increase the manpower to carry the load if equipment is not available",
				"2" =>	"use of trolley to transport the load",
				"3" =>	"brief on toolbox meeting and risk assessment",
				"4" =>	"all workers to be brief on the proper lifting posture from the SWP",
				"5" =>	"Supervisor to ensure no over loading",
	),
	"m_o_u_g" => array(
				"0" =>	"Supervisor to ensure material to be on stable ground before moving off",
				"1" =>	"Alum/ Glass  to be placed to 85Degree against the wall and support by timber strip on floor",
				"2" =>	"Ensure to check surrounding area free from any debris/Obstruction.",
				"3" =>	"Cordon-off storage Area with danger warning sign displayed",
				"4" =>	"Provide watchman/signalmen to stop unauthorized entry",
				"5" =>	"Avoid any storage of glass along pathway/corridor.",
				"6" =>	"Immediate supervision by site supervisor/ safety supervisor ensures compliance.",
	),
	"w_a_h_b" => array(
				"0" =>	"Donned safety harness with 100% tie off",
				"1" =>	"Ensure boomlift door and handrail are in good condition",
				"2" =>	"check the maintenance report of the boomlift",
				"3" =>	"Ensure valid LP cert",
				"4" =>	"Operators are trained to use the MEWP",
				"5" =>	"proper demarcation to be in placed",
				"6" =>	"warning signs to be provided to warn others of work area",
				"7" =>	"Training to prevent workers from working outside the railing",
				"8" =>	"Pre inspection of Fall prevention PPE",
				"9" =>	"Ensure that the free fall distance is sufficient",
				"10" =>	"Apply WAH permit to work before start of work",
				"11" =>	"Briefing to be conducted before start of work",
				"12" =>	"Emergency Rescue Plan to be briefed to all WAH personnel",
				"13" =>	"WAH personnel to be trained and briefed",
				"14" =>	"Only worker with more than 1 years of relavant experience are allowed to work",
				"15" =>	"Install pipe(taller than worker) on boomlift to prevent worker from hitting the roof",
				"16" =>	"Only authorized operator are allowed to operate machine. LOA on display for inspection",
	),
	"w_a_h_s" => array(
				"0" =>	"Donned safety harness with 100% tie off",
				"1" =>	"Ensure boomlift door and handrail are in good condition",
				"2" =>	"check the maintenance report of the Scissor lift",
				"3" =>	"Ensure valid LP cert",
				"4" =>	"Operators are trained to use the MEWP by supplier",
				"5" =>	"proper demarcation to be in placed",
				"6" =>	"warning signs to be provided to warn others of work area",
				"7" =>	"Training to prevent workers from working outside the railing",
				"8" =>	"Pre inspection of Fall prevention PPE",
				"9" =>	"Ensure that the free fall distance is sufficient",
				"10" =>	"Apply WAH permit to work before start of work",
				"11" =>	"Briefing to be conducted before start of work",
				"12" =>	"Emergency Rescue Plan to be briefed to all WAH personnel",
				"13" =>	"WAH personnel to be trained and briefed",
				"14" =>	"Only worker with more than 1 years of relavant experience are allowed to work",
				"15" =>	"Install pipe(taller than worker) on Sisscor lift to prevent worker from hitting the ceiling",
				"16" =>	"Only authorized operator are allowed to operate machine. LOA on display for inspection",
	),
	"w_a_h_sf" => array(
				"0" =>	"Donned safety harness with 100% tie off",
				"1" =>	"Ensure scaffold is erected by trained erectors and supervised by approved scaffold erector",
				"2" =>	"Only approved scaffold contractor is allowed to erect scaffold more than 4m in height",
				"3" =>	"Scaffold inspection to be done by scaffold supervior every 7 days",
				"4" =>	"PE design for scaffold exceeding 30m in height and examined after installation",
				"5" =>	"Supervisor shall check on the inspection tag to ensure safe to use before using the scaffold",
				"6" =>	"Supervisor to ensure no modification to be done by any party except the scaffold contractor",
				"7" =>	"Proper access and egress to be avaiable and inspection tags will be placed at all access point",
	),
	"p_p_f_l_o" => array(
				"0" =>	"Lifting Supervisor, signalmen and riggerman to plan for the operation",
				"1" =>	"Lifting permit to work and lifting plan shall be approved",
				"2" =>	"Lifting supervisor to ensure that the crane is on even ground",
				"3" =>	"Provide steel plate if ground is soft",
				"4" =>	"outrigger to be fully extended and on hard ground",
				"5" =>	"lifting area shall be demarcated and warning signs provided",
				"6" =>	"Lifting team will commnunicate using walkie talkie and whistles",
				"7" =>	"Lifting supervisor shall ensure that crane operator is trained. Certificate to verify",
				"8" =>	"Lifting supervisor to ensure no overloading",
				"9" =>	"Pre inspection of the crane shall be done with the operator",
				"10" =>	"inspection of the crane latest maintenance records",
				"11" =>	"Use of safety helmet safety shoes and gloves",
	),
	"f_p" => array(
				"0" =>	"Use of exhaust fan and dustbag to remove debris from the worplace", 
				"1" =>	"Supervisor to ensure all workers are donned with safety glasses",
				"2" =>	"Use of face mask if necessary",
				"3" =>	"Workers shall put on dust mask and replace them daily",
				"4" =>	"Use of safety helmet  with chip strap", 
				"5" =>	"Supervisor to enforce all workers to put on the PPE",
				"6" =>	"Use of safety net to prevent particles/debris to fall over other work area",
				"7" =>	"Install 4m tall hoarding to prevent flying particles to hit others",
				"8" =>	"Adhere to SWP for hacking/drilling procedure",
	),
	"w_a_h_t" => array(
				"0" =>	"Set up traffic cones and barrier to demarcate work area",
				"1" =>	"Set up warning signs to warn others of the work ahead",
				"2" =>	"Traffic controller to slow down traffic or redirect traffic",
				"3" =>	"Hoard up unloading area and redirect traffic",
				"4" =>	"Brief on the risk assessment and SWP",
				"5" =>	"Use of truck mounted attenuator to prevent vehicle from crashing into work area",
				"6" =>	"Use of traffic mannequin to slow others",
				"7" =>	"Working personnel to put on reflective vest at all time",
				"8" =>	"Put up the warning signs according to the road closure permit",
	),
	"w_i_t_t" => array(
				"0" =>	"Track possession to be obtained",
				"1" =>	"Short circuit device to be done by Track Possession Officer (TPO)",
				"2" =>	"Provide sufficent light to avoid stepping on damaged cables",
				"3" =>	"Wear long rubber boots for insulation",
				"4" =>	"Briefing to all surveyors to avoid touching the cables",
				"5" =>	"Contact occupier to remove to re route the cable if it is blocking the work area",
				"6" =>	"Ensure permit is obtained before entering the track",
	),
	"u_s_c_m_v" => array(
				"0" =>	"Set up traffic cones and barrier to demarcate work area",
				"1" =>	"Set up warning signs to warn others of the work ahead",
				"2" =>	"Traffic controller to slow down traffic or redirect traffic",
				"3" =>	"Hoard up unloading area and redirect traffic",
				"4" =>	"Brief on the risk assessment and SWP",
				"5" =>	"Use of truck mounted attenuator to prevent vehicle from crashing into work area",
				"6" =>	"Use of traffic mannequin to slow others",
				"7" =>	"Working personnel to put on reflective vest at all time",
				"8" =>	"Close the road temporary and provide alternate access",
				"9" =>	"Work during off peak period",
	),
	"u_s_c_f_o" => array(
				"0" =>	"Coordinate contractor above to temporary stop their work",
				"1" =>	"Inform main contractor/occupier to provide temporary shelter if work above cannot be stopped",
				"2" =>	"Erect temporary support and netting to prevent fall objects",
				"3" =>	"Put on safety helmet with chip strap",
				"4" =>	"inform others of our presence",
	),
	"u_s_c_l" => array(
				"0" =>	"Apply permit and inform station about the work in the tunnel",
				"1" =>	"Put on high reflective vest",
				"2" =>	"Obtain track possession before start of work",
				"3" =>	"Place warning lights at the start and the end of the station tunnel",
	),
	"u_s_c_w_a_h" => array(
				"0" =>	"Subsitute with portable access platform",
				"1" =>	"Use of access gangway",
				"2" =>	"Implement effective safety travel restrain system, use of travel restrain belt with life line",
				"3" =>	"Use of self retracting lifeline and to be always above head level",
				"4" =>	"Use of approved scaffold with proper access and egress",
				"5" =>	"Buddy system to support ladder, ladder to be in good condition",
				"6" =>	"Install temporary edge protection",
				"7" =>	"Install Perimeter Guard-Railing",
				"8" =>	"Proper demarcation to be in placed",
				"9" =>	"Opening to be fully covered",
				"10" =>	"Warning signs to be provided",
				"11" =>	"Use of working platform with proper guardrail to prevent fall",
				"12" =>	"Training to prevent workers from working outside the railing",
				"13" =>	"Use of self retracting lifeline and to be above worker head",
				"14" =>	"Pre inspection of fall prevention/arrest PPE",
				"15" =>	"Ensure that the free fall distance is sufficient for the safety harness",
				"16" =>	"Proper maintenance of the PPE to be carried out monthly",
				"17" =>	"Briefing to be conducted before start of work",
				"18" =>	"Emergency Rescue Plan to be briefed to all WAH personnel",
				"19" =>	"WAH personnel to be trained and briefed",
				"20" =>	"Only worker with more than 1 years of relevant experience are allowed to work",
				"21" =>	"WAH permit to work shall be approved before starting work",
				"22" =>	"Onsite supervison and frequent inspection and training",
	),
	"u_s_c_r_a_i" => array(
		"0" =>	"Briefing to be conducted before start of work",
		"1" =>	"All working personnel shall be put on high boots and long thick pants",
		"2" =>	"Sticks to pry open thick bushes around work area to prevent stepping on reptiles",
		"3" =>	"All working personnel shall not provoke or touch the animal on site",
		"4" =>	"Watchman shall be deployed to keep a lookout",
		"5" =>	"Buddy system to be in placed",
		"6" =>	"If work area is infested with reptiles or snakes, contact ACRES(wildlife) to remove them before proceed with work",
	),
	"u_s_c_w_n_d_w" => array(
		"0" =>	"Set up water barrier to prevent fall into water",
		"1" =>	"All working personnel shall wear life jackets",
		"2" =>	"Life buoy with long ropes attached shall be available",
		"3" =>	"Travel restraint shall be in placed. Restrain travel to the edge of water by tying harness to rope",
		"4" =>	"Life guard to be on standby",
		"5" =>	"Working personnel that do not know how to swim shall not be given work near the edge of the water",
	),
	"n_w_p_v" => array(
		"0" =>	"Provide reflective signages to warn others",
		"1" =>	"Use of blinking lights to warn others",
		"2" =>	"Provide adequate light using portable flood light",
		"3" =>	"Set up warning signs 20m and 10m before to warn others of the work ahead",
		"4" =>	"All working personnel shall put on reflective safety vest",
		"5" =>	"All working personnel shall be issued with torch light",
		"6" =>	"Dangerous work area shall be marked with blinking light or reflective strap and highlighted in the day and brief to all working personnel",
		"7" =>	"A site location plan to indicate hazardous area shall be displayed and provided for new workers or visitors",
		"8" =>	"All visitors shall be escorted",
	),
	"other" => array()
);
