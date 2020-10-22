<?php
require 'simple_html_dom.php';
$output = fopen('Riverflows.csv', 'w'); 
{
	$html = file_get_html('http://wapda.gov.pk/index.php/component/content/article?tmpl=component&id=42');
	fputcsv($output, array('Period Date', 'Indus at Tarbela Levels(feet)','Indus at Tarbela Inflow', 'Indus at Tarbela Outflow','Kabul Inflow at Nowshera','Jehlum at Mangla Levels(feet)','Jehlum at Mangla Inflow','Jehlum at Mangla Outflow','Chenab Inflow at Marala','System Inflows Current Year','System Inflows Last Year','System Inflows This Decade'));
		$table = $html->find('tbody', 0);
		$row = $table->find('tr');
		$cell = $table->find('td', 0);
		$count = 0;
		$newrow= [];
		$v = 0;
		$row = array_reverse($row);
		foreach ($row as $row) {
			foreach ($row->find('td') as $cell) {
			$cell->removeAttribute("width");
            if ($count == 0) {
                $date = $cell->plaintext;
                $date = str_replace("/", "-", $date);
                $arr = preg_split("~-~", "$date");
				$arr = preg_replace("/\s+/","",$arr);
			
				$str="";
				for ($i = 0; $i<sizeof($arr);$i++)
					{$str = $str . $arr[$i];}
				if (($str== "1Jan")||($str=="1Jan&nbsp;")){$v++;}
					if ($v==1){ 
						if ($arr[1] == "Dec" || $arr[1] == "Dec&nbsp;") {
						$date = "2017-12-" . $arr[0]; 
						}		 
						else if ($arr[1] == "Jan" || $arr[1] == "Jan&nbsp;") {
						$date = "2017-1-" . $arr[0];
						} 	
						else if ($arr[1] == "Feb" || $arr[1] == "Feb&nbsp;") {
						$date = "2017-2-" . $arr[0];
						} 	
						else if ($arr[1] == "Mar" || $arr[1] == "Mar&nbsp;") {
						$date = "2017-3-" . $arr[0];
						} 		
						else if ($arr[1] == "Apr" || $arr[1] == "Apr&nbsp;") {
						$date = "2017-4-" . $arr[0];
						} 	
						else if ($arr[1] == "May" || $arr[1] == "May&nbsp;") {
						$date = "2017-5-" . $arr[0];
						}	
						else if ($arr[1] == "Jun" || $arr[1] == "Jun&nbsp;") {
						$date = "2017-6-" . $arr[0];
						} 	
						else if ($arr[1] == "Jul" || $arr[1] == "Jul&nbsp;") {
						$date = "2017-7-" . $arr[0];
						} 	
						else if ($arr[1] == "Aug" || $arr[1] == "Aug&nbsp;") {
						$date = "2017-8-" . $arr[0];
						} 	
						else if ($arr[1] == "Sep" || $arr[1] == "Sep&nbsp;") {
						$date = "2017-9-" . $arr[0];
						} 	
						else if ($arr[1] == "Oct" || $arr[1] == "Oct&nbsp;") {
						$date = "2017-10-" . $arr[0];
						} 		
						else if ($arr[1] == "Nov" || $arr[1] == "Nov&nbsp;") {
						$date = "2017-11-" . $arr[0];
						}

						$newrow[0]=$date;
					}
           
				else if ($v==2){
					if ($arr[1] == "Dec" || $arr[1] == "Dec&nbsp;") {
                    $date = "2018-12-" . $arr[0]; 
                } else if ($arr[1] == "Jan" || $arr[1] == "Jan&nbsp;") {
                    $date = "2018-1-" . $arr[0];
                } else if ($arr[1] == "Feb" || $arr[1] == "Feb&nbsp;") {
                    $date = "2018-2-" . $arr[0];
                } else if ($arr[1] == "Mar" || $arr[1] == "Mar&nbsp;") {
                    $date = "2018-3-" . $arr[0];
                } else if ($arr[1] == "Apr" || $arr[1] == "Apr&nbsp;") {
                    $date = "2018-4-" . $arr[0];
                } else if ($arr[1] == "May" || $arr[1] == "May&nbsp;") {
                    $date = "2018-5-" . $arr[0];
                } else if ($arr[1] == "Jun" || $arr[1] == "Jun&nbsp;") {
                    $date = "2018-6-" . $arr[0];
                } else if ($arr[1] == "Jul" || $arr[1] == "Jul&nbsp;") {
                    $date = "2018-7-" . $arr[0];
                } else if ($arr[1] == "Aug" || $arr[1] == "Aug&nbsp;") {
                    $date = "2018-8-" . $arr[0];
                } else if ($arr[1] == "Sep" || $arr[1] == "Sep&nbsp;") {
                    $date = "2018-9-" . $arr[0];
                } else if ($arr[1] == "Oct" || $arr[1] == "Oct&nbsp;") {
                    $date = "2018-10-" . $arr[0];
                } else if ($arr[1] == "Nov" || $arr[1] == "Nov&nbsp;") {
                    $date = "2018-11-" . $arr[0];
                }

				$newrow[0]=$date;
				}
				else if ($v==3){
				
                if ($arr[1] == "Dec" || $arr[1] == "Dec&nbsp;") {
                    $date = "2019-12-" . $arr[0]; 
                } else if ($arr[1] == "Jan" || $arr[1] == "Jan&nbsp;") {
                    $date = "2019-1-" . $arr[0];
                } else if ($arr[1] == "Feb" || $arr[1] == "Feb&nbsp;") {
                    $date = "2019-2-" . $arr[0];
                } else if ($arr[1] == "Mar" || $arr[1] == "Mar&nbsp;") {
                    $date = "2019-3-" . $arr[0];
                } else if ($arr[1] == "Apr" || $arr[1] == "Apr&nbsp;") {
                    $date = "2019-4-" . $arr[0];
                } else if ($arr[1] == "May" || $arr[1] == "May&nbsp;") {
                    $date = "2019-5-" . $arr[0];
                } else if ($arr[1] == "Jun" || $arr[1] == "Jun&nbsp;") {
                    $date = "2019-6-" . $arr[0];
                } else if ($arr[1] == "Jul" || $arr[1] == "Jul&nbsp;") {
                    $date = "2019-7-" . $arr[0];
                } else if ($arr[1] == "Aug" || $arr[1] == "Aug&nbsp;") {
                    $date = "2019-8-" . $arr[0];
                } else if ($arr[1] == "Sep" || $arr[1] == "Sep&nbsp;") {
                    $date = "2019-9-" . $arr[0];
                } else if ($arr[1] == "Oct" || $arr[1] == "Oct&nbsp;") {
                    $date = "2019-10-" . $arr[0];
                } else if ($arr[1] == "Nov" || $arr[1] == "Nov&nbsp;") {
                    $date = "2019-11-" . $arr[0];
                }

				$newrow[0]=$date;}
				else if ($v==4){
					$a = isset($arr[1]) ? $arr[1] : null;
				
					if ($a == "Dec" || $a == "Dec&nbsp;") {
						$date = "2020-12-" . $arr[0]; 
					} else if ($a == "Jan" || $a == "Jan&nbsp;") {
						$date = "2020-1-" . $arr[0];
					} else if ($a == "Feb" || $a == "Feb&nbsp;") {
						$date = "2020-2-" . $arr[0];
					} else if ($a == "Mar" || $a == "Mar&nbsp;") {
						$date = "2020-3-" . $arr[0];
					} else if ($a == "Apr" || $a == "Apr&nbsp;") {
						$date = "2020-4-" . $arr[0];
					} else if ($a == "May" || $a == "May&nbsp;") {
						$date = "2020-5-" . $arr[0];
					} else if ($a == "Jun" || $a == "Jun&nbsp;") {
						$date = "2020-6-" . $arr[0];
					} else if ($a == "Jul" || $a == "Jul&nbsp;") {
						$date = "2020-7-" . $arr[0];
					} else if ($a == "Aug" || $a == "Aug&nbsp;") {
						$date = "2020-8-" . $arr[0];
					} else if ($a == "Sep" || $a == "Sep&nbsp;") {
						$date = "2020-9-" . $arr[0];
					} else if ($a == "Oct" || $a == "Oct&nbsp;") {
						$date = "2020-10-" . $arr[0];
					} else if ($a == "Nov" || $a == "Nov&nbsp;") {
						$date = "2020-11-" . $arr[0];
					}
	
					$newrow[0]=$date;}
            } else if ($count == 1) {
                $level = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
             
				$newrow[1]=$level;
            } else if ($count == 2) {
                $inflow = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
                
				$newrow[2]=$inflow;
            } else if ($count == 3) {
                $outflow = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
              
				$newrow[3]=$outflow;
            } else if($count == 4) {
				$inflow_kabul = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
				
				$newrow[4]=$inflow_kabul;
			} else if($count == 5) {
				$level_jhelum = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
		
				$newrow[5]=$level_jhelum;
			} else if($count == 6) {
				$inflow_jhelum = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
	
				$newrow[6]=$inflow_jhelum;
			} else if($count == 7) {
				$outflow_jhelum = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
		
				$newrow[7]=$outflow_jhelum;
			} else if($count == 8) {
				$inflow_chenab = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
		
				$newrow[8]=$inflow_chenab;
			}
			else if($count == 9) {
				$inflow_currentyear = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
		
				$newrow[9]=$inflow_currentyear;
			}
			else if($count == 10) {
				$inflow_lastyear = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
		
				$newrow[10]=$inflow_lastyear;
			}
			else if($count == 11) {
				$inflow_decade = floatval(preg_replace("/[^-0-9\.]/", "", $cell));
		
				$newrow[11]=$inflow_decade;
			}
            $count++;
            
			}
		fputcsv($output, $newrow);
        
        $count = 0;
		}	
	}
?>