<!DOCTYPE html>
<html dir="ltr" lang="fr-FR">
    <head>
        <meta charset="utf-8"/>
        <title>Survey</title>
        <!--link for bootstrap4
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
-->
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="icon" type="image/png" href="picture/logoMini.png" />

    </head> 
    <body>
        <!--
<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
<a class="navbar-brand" href="index.html">
<img src="picture/logoMini.png" alt="Logo" class="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbars">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse navbars" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="#company">Your company</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#infrastructures">Infrastructures</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#management">Management</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#energy">Energy consumption</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#printing">Printing</a>
</li>
</ul>
</div>
</nav> -->
        <h1>Presentation of the questionnaire</h1>

        With the support of ADEME, the Ministry of Ecology, Energy and the Sea and the Ministry of Economy and Finance, the association AGIT (Alliance for Green IT) and the eco-organizations of the recycling network of Waste Electrical and Electronic Equipment (WEEE) organize a survey to assess the deposits of computer and office equipment present in companies and more generally on the maturity of companies in France in the use of eco-responsible digital services.
        The duration of the questionnaire is estimated at 15 minutes if you are able to answer questions directly.
        You can return at any time on the questionnaire, answer in several times, your previous answers are recorded. In case of modification, only the last answer will be taken into account.
        You can submit this questionnaire to several people in your organization. All you have to do is simply share the link to the questionnaire.
        Thank you for participating in this survey. Your answer is invaluable to us to constitute the most representative sample of the companies in France.

        <h1>Questionnaire</h1>

        <form name="questionnaire_agit" action="" method="post">
            <input type="submit" value="save" name="save"><input  type="submit"  value="submit" name="submit">

            <h2 id="company">Your company</h2>
            <p>1. In which sector of activity is your company active? (linked with your APE code)</p>
            <select class="form-control" name="1">
                <option value="industry">Industry</option>
                <option value="business">Business</option>
                <option value="info_comm">Information and Communication</option>
                <option value="other_services">Other services activities</option>
                <option value="all_other_activities">All other activties (financial, agricultural activities...)</option>
                <option value="construction">Construction</option>
                <option value="public_sector">Public sector</option>
                <option value="sstassa">Specialized, Scientific and Technical or Administrative and Support Services Activities</option>
                <option value="real_estate">Real Estate</option>
            </select>

            <p>2. What is the number of employees in your company on 18/12/31?</p> 
            <select class="form-control" name="2">
                <option value="none">0</option>
                <option value="one_to_two">1 to 2</option>
                <option value="three_to_nine">3 to 9</option>
                <option value="ten_to_fourtynine">10 to 49</option>
                <option value="fifty_to_twofourtynine">50 to 249</option>
                <option value="twofifty_to_fournineninenine">250 to 4999</option>
                <option value="over_fivek">More than 5000</option>
            </select>

            <p>3. What is the turnover of your company in the last fiscal year? (or annual budget for Public sector) </p>
            <select class="form-control" name="3">
                <option value="zero_to_hundred">0 to 100k &euro;</option>
                <option value="one_to_fivehundred">100k to 500k &euro;</option>
                <option value="fivehundred_to_twomillions">500k to 2M &euro;</option>
                <option value="two_to_tenmillions">2M to 10M &euro;</option>
                <option value="ten_to_fiftymillions">10M to 50M &euro;</option>
                <option value="over_fiftymillions">Over 50M &euro;</option>
            </select>

            <p>4. Do you develop digital services for international or external use (sales to customer)?</p> 


            <input type="radio" name="4" id="4.1" value="yes"/>Yes

            <input type="radio" name="4" value="no" />No



            <p>5. What is the number of users of your digital services? </p>
            <input disabled = true id="5.1" class="form-control" type="text" name="5" size="10"  />

            <h3>Ecoconception good practices</h3>

            <p>6. Do you apply the rules and best prectices for digital accessibility? </p>


            <input type="radio" name="6" value="yes"  disabled = true id="6.1"/>Yes 
            <input type="radio" name="6" value="no" disabled = true id="6.2"/>No 
            <input type="radio" name="6" value="dontknow" disabled = true id="6.3"/>I don't know 


            <p>7. Have you optimized the states and printouts in your application tools (reduced number of pages when printing, ink consumption...)? </p>


            <input type="radio" name="7" value="yes" disabled = true id="7.1"/>Yes

            <input type="radio" name="7" value="no" disabled = true id="7.2"/>No

            <input type="radio" name="7" value="dontknow" disabled = true id="7.3"/>I don't know



            <p>8. Do you integrate the principles of the ecodesign of digital services? </p>


            <input type="radio" name="8" value="yes" disabled = true id="8.1"/>Yes

            <input type="radio" name="8" value="no" disabled = true id="8.2"/>No

            <input type="radio" name="8" value="dontknow" disabled = true id="8.3"/>I don't know



            <p>9. Do you use a modular application infrastructure? </p>


            <input type="radio" name="9" value="yes" disabled = true id="9.1"/>Yes

            <input type="radio" name="9" value="no" disabled = true id="9.2"/>No

            <input type="radio" name="9" value="dontknow" disabled = true id="9.3"/>I don't know



            <p>10. Do you do a design review at the end of your application's development? </p>


            <input type="radio" name="10" value="yes" disabled = true id="10.1"/>Yes

            <input type="radio" name="10" value="no" disabled = true id="10.2"/>No

            <input type="radio" name="10" value="dontknow" disabled = true id="10.3"/>I don't know







            <h2 id="infrastructures">Infrastructures</h2>

            <h2>Information system</h2>
            <p>11. What is the overall storage volume of your corporate data (centralized on external hard drives, centralized server, NAS, SAN ...) in Terabytes (TB) useful? </p>


            <input disabled = true id="11.1" type="radio" name="11" value="dontknow"/>I don't know

            <input disabled = true id="11.2" type="radio" name="11" value="no_answer"/>I don't want to answer

            <input disabled = true id="11.3" type="radio" name="11" value="other_answer"/>
            <input disabled = true id="11.4" placeholder="TB" class="form-control" type="text" name="storage_volume11"/> 


            <p>12. Do you have a server or do you only work with one or more workstations? </p>


            <input type="radio" name="12" value="workstations"/>We work with workstation (s), without centralized physical server

            <input type="radio" name="12" id="12.2" value="centralized_server"/>We have (at least) a centralized physical server



            <p>13. Do you have a dedicated room, simple room or cupboard with bay dedicated to your IT infrastructure? </p>


            <input disabled = true id="13.1" type="radio" name="13" value="closet"/>A closet or a room without any specific system 
            <input disabled = true type="radio" name="13" id="13.2" value="dedicated_room"/>We have (at least) a centralized physical server



            <h2>Server/Computer room</h2>
            <p>14. Is your computer room in house or at a host? </p>


            <input disabled = true id="14.1" type="radio" name="14" value="internal"/>Internal

            <input disabled = true id="14.2" type="radio" name="14" value="hmeccd"/>Host Member of the European Code of Conduct for Datacenters

            <input disabled = true id="14.3" type="radio" name="14" value="no_hmeccd"/> Non-adhering Host of the European Code of Conduct for Datacenters


            <p>15. What is the total area of your computer rooms (excluding technical infrastructure *)? (in m2) </p>


            <input disabled = true id="15.1" type="radio" name="15" value="dontknow"/>I don't know

            <input disabled = true id="15.2" type="radio" name="15" value="no_answer"/>I do not want to answer

            <input disabled = true id="15.3" type="radio" name="15" value="other"/>
            <input disabled = true class="form-control" placeholder="m&sup2;" type="text" name="area15"/>   


            <p>16. Do you know the PUE * of your Data Center? </p>

            <b>*PUE : Power Usage Effectiveness</b>


            <input disabled = true id="16.1" type="radio" name="16" value="less1_6"/>Less than 1,6

            <input disabled = true id="16.2" type="radio" name="16" value="1_6to2_1"/>Between 1,6 and 2,1

            <input disabled = true id="16.3" type="radio" name="16" value="more2_1"/>More than 2,1

            <input disabled = true id="16.4" type="radio" name="16" value="dunno"/>I don't know


            <p>17. What is the rate of charge or energy use of your computer rooms? </p>
            <b>Rate = Electrical power absorbed by your IT equipment, divided by room capacity in kW, then multiplied by 100 (used energy / available energy)</b>


            <input disabled = true id="17.1" type="radio" name="17" value="100_90"/>100% - 90%

            <input disabled = true id="17.2" type="radio" name="17" value="90_60"/>90% - 60%

            <input disabled = true id="17.3" type="radio" name="17" value="less60"/>Less than 60%

            <input disabled = true id="17.4" type="radio" name="17" value="dontknow"/>I don't know



            <p>18. Have you led or are you planning actions to optimize your infrastructure? Especially : </p> 


            <input disabled = true id="18.1" type="radio" name="18" value="yes"/>Yes

            <input disabled = true id="18.2" type="radio" name="18" value="no"/>No

            <input disabled = true id="18.3" type="radio" name="18" value="dontknow"/>I don't know



            <p>19. The purchase of non-IT equipment from IT rooms (air conditioning, air treatment, inverters, etc.) according to energy efficiency criteria </p>


            <input disabled = true id="19.1" type="radio" name="19" value="yes"/>Yes

            <input disabled = true id="19.2" type="radio" name="19" value="no"/>No

            <input disabled = true id="19.3" type="radio" name="19" value="dontknow"/>I don't know



            <p>20. Implementing the good practices of the "European Code of Conduct for DataCenter"? </p>


            <input disabled = true id="20.1" type="radio" name="20" value="yes"/>Yes

            <input disabled = true id="20.2" type="radio" name="20" value="no"/>No

            <input disabled = true id="20.3" type="radio" name="20" value="dontknow"/>I don't know



            <p>21. Data center PUE tracking </p>


            <input disabled = true id="21.1" type="radio" name="21" value="yes"/>Yes

            <input disabled = true id="21.2" type="radio" name="21" value="no"/>No

            <input disabled = true id="21.3" type="radio" name="21" value="dontknow"/>I don't know



            <p>22. Regular monitoring of environmental indicators of computer rooms </p>


            <input disabled = true id="22.1" type="radio" name="22" value="yes"/>Yes

            <input disabled = true id="22.2" type="radio" name="22" value="no"/>No

            <input disabled = true id="22.3" type="radio" name="22" value="dontknow"/>I don't know



            <p>23. Environmental impact analysis of the datacenter in life cycle approach </p>


            <input disabled = true id="23.1" type="radio" name="23" value="yes"/>Yes

            <input disabled = true id="23.2" type="radio" name="23" value="no"/>No

            <input disabled = true id="23.3" type="radio" name="23" value="dontknow"/>I don't know



            <p>24. Optimizing the architecture and layout of rooms </p>


            <input disabled = true id="24.1" type="radio" name="24" value="yes"/>Yes

            <input disabled = true id="24.2" type="radio" name="24" value="no"/>No

            <input disabled = true id="24.3" type="radio" name="24" value="dontknow"/>I don't know



            <p>25. The urbanization of halls in hot / cold aisles </p>


            <input disabled = true id="25.1" type="radio" name="25" value="yes"/>Yes

            <input disabled = true id="25.2" type="radio" name="25" value="no"/>No

            <input disabled = true id="25.3" type="radio" name="25" value="dontknow"/>I don't know



            <p>26. Containment of air flows (corridors) </p>


            <input disabled = true id="26.1" type="radio" name="26" value="yes"/>Yes

            <input disabled = true id="26.2" type="radio" name="26" value="no"/>No

            <input disabled = true id="26.3" type="radio" name="26" value="dontknow"/>I don't know



            <p>27. The use of natural cooling sources (freecooling) </p>


            <input disabled = true id="27.1" type="radio" name="27" value="yes"/>Yes

            <input disabled = true id="27.2" type="radio" name="27" value="no"/>No

            <input disabled = true id="27.3" type="radio" name="27" value="dontknow"/>I don't know



            <p>28. Implementation of a heat recovery system for computer rooms (heating) </p>


            <input disabled = true id="28.1" type="radio" name="28" value="yes"/>Yes

            <input disabled = true id="28.2" type="radio" name="28" value="no"/>No

            <input disabled = true id="28.3" type="radio" name="28" value="dontknow"/>I don't know



            <p>29. The set temperature in the cold corridor remains higher than 24 ° </p>


            <input disabled = true id="29.1" type="radio" name="29" value="yes"/>Yes

            <input disabled = true id="29.2" type="radio" name="29" value="no"/>No

            <input disabled = true id="29.3" type="radio" name="29" value="dontknow"/>I don't know



            <p>30. The choice of a modular datacenter architecture </p>


            <input disabled = true id="30.1" type="radio" name="30" value="yes"/>Yes

            <input disabled = true id="30.2" type="radio" name="30" value="no"/>No

            <input disabled = true id="30.3" type="radio" name="30" value="dontknow"/>I don't know





            <h2>Server / a cupboard or a dedicated room</h2>
            <p>31. Have you led or are you planning actions to optimize your infrastructure? Especially : </p>


            <input disabled = true id="31.1" type="radio" name="31" value="yes"/>Yes

            <input disabled = true id="31.2" type="radio" name="31" value="no"/>No

            <input disabled = true id="31.3" type="radio" name="31" value="dontknow"/>I don't know



            <p>32. Suspending network equipment </p>


            <input disabled = true id="32.1" type="radio" name="32" value="yes"/>Yes

            <input disabled = true id="32.2" type="radio" name="32" value="no"/>No

            <input disabled = true id="32.3" type="radio" name="32" value="dontknow"/>I don't know



            <p>33. Pooling physical equipment </p>


            <input disabled = true id="33.1" type="radio" name="33" value="yes"/>Yes

            <input disabled = true id="33.2" type="radio" name="33" value="no"/>No

            <input disabled = true id="33.3" type="radio" name="33" value="dontknow"/>I don't know



            <p>34. Uninstalling unnecessary infrastructure </p>


            <input disabled = true id="34.1" type="radio" name="34" value="yes"/>Yes

            <input disabled = true id="34.2" type="radio" name="34" value="no"/>No

            <input disabled = true id="34.3" type="radio" name="34" value="dontknow"/>I don't know



            <p>35. Traceability of material elements (CMDB) </p>


            <input disabled = true id="35.1" type="radio" name="35" value="yes"/>Yes

            <input disabled = true id="35.2" type="radio" name="35" value="no"/>No

            <input disabled = true id="35.3" type="radio" name="35" value="dontknow"/>I don't know



            <p>36. The correct sizing of the servers in relation to their use </p>


            <input disabled = true id="36.1" type="radio" name="36" value="yes"/>Yes

            <input disabled = true id="36.2" type="radio" name="36" value="no"/>No

            <input disabled = true id="36.3" type="radio" name="36" value="dontknow"/>I don't know



            <p>37. Give priority to ASHRAE 2 compatible equipment </p>


            <input disabled = true id="37.1" type="radio" name="37" value="yes"/>Yes

            <input disabled = true id="37.2" type="radio" name="37" value="no"/>No

            <input disabled = true id="37.3" type="radio" name="37" value="dontknow"/>I don't know



            <p>38. A procedure for provisioning and de-provisioning data-processing equipment in datacenters </p>


            <input disabled = true id="38.1" type="radio" name="38" value="yes"/>Yes

            <input disabled = true id="38.2" type="radio" name="38" value="no"/>No

            <input disabled = true id="38.3" type="radio" name="38" value="dontknow"/>I don't know



            <p>39. Do you know the number of physical servers and virtual servers in your company? </p>


            <input disabled = true id="39.1" type="radio" name="39" id="39.1" value="yes"/>Yes

            <input disabled = true id="39.2" type="radio" name="39" value="no"/>No

            <input disabled = true id="39.3" type="radio" name="39" value="no_answer"/>I do not want to answer



            <p>40. How many physical servers do you have? </p>

            <input class="form-control" type="text" name="40"/>

            <p><p>41. How many virtual servers do you have? 

            <input class="form-control" type="text" name="41"/>

            <p>42. What will be the evolution of your number of physical servers for 2019? (in% or quantity) </p>


            <input disabled = true id="42.1" type="radio" name="42" value="yes"/>In % <input class="form-control" placeholder="%" type="text" name="42_percent"/>

            <input disabled = true id="42.2" type="radio" name="42" value="no"/>In quantity <input class="form-control" type="text" name="42_quantity"/>

            <input disabled = true id="42.3" type="radio" name="42" value="no_answer"/>I do not want to answer

            <input disabled = true id="42.4" type="radio" name="42" value="dontknow"/>I don't know



            <p> 43. What will be the evolution of your number of virtual servers for 2019? (in% or quantity) </p>


            <input disabled = true id="43.1" type="radio" name="43" value="yes"/>In % <input class="form-control" placeholder="%" type="text" name="42_percent"/> 

            <input disabled = true id="43.2" type="radio" name="43" value="no"/>In quantity <input class="form-control" type="text" name="42_quantity"/>

            <input disabled = true id="43.3" type="radio" name="43" value="no_answer"/>I do not want to answer

            <input disabled = true id="43.4" type="radio" name="43" value="dontknow"/>I don't know






            <h2 id="management"> Management </h2>
            <p>44. Has your company appointed a Green IT Manager / Digital Manager?  </p>


            <input disabled = true id="44.1" type="radio" name="44" value="yes_"/> Yes
            <input disabled = true id="44.2" type="radio" name="44" value="no_"/> No
            <input disabled = true id="44.3" type="radio" name="44" value="idk_"/> I don't know


            <p>45. Do you have a responsible digital strategy broken down into an action plan? </p> 


            <input disabled = true id="45.1" type="radio" name="45" value="yes"/> Yes
            <input disabled = true id="45.2" type="radio" name="45" value="no"/> No
            <input disabled = true id="45.3" type="radio" name="45" value="idk"/> I don't know


            <p>46. Is Green IT a topic integrated into your CSR strategy?  </p>


            <input disabled = true id="46.1" type="radio" name="46" value="yes"/> Yes
            <input disabled = true id="46.2" type="radio" name="46" value="no"/> No
            <input disabled = true id="46.3" type="radio" name="46" value="idk"/> I don't know


            <p>47. Do you regularly evaluate the environmental impacts of your information system?  </p>


            <input disabled = true id="47.1" type="radio" name="47" value="yes"/> Yes totally, including our internal equipment and services hosted by third parties

            <input disabled = true id="47.2" type="radio" name="47" value="yes"/> Yes partially, including only equipment present in the companyour internal equipment and services hosted by third parties

            <input disabled = true id="47.3" type="radio" name="47" value="no"/> No

            <input disabled = true id="47.4" type="radio" name="47" value="idk"/> I don't know


            <p>48. Do you have a team of competent referees on the topics of Green IT?  </p>


            <input disabled = true id="48.1" type="radio" name="48" value="yes"/> Yes
            <input disabled = true id="48.2" type="radio" name="48" value="no"/> No
            <input disabled = true id="48.3" type="radio" name="48" value="idk"/> I don't know


            <p>49. Have you integrated Green IT into your business strategy?  </p>


            <input disabled = true id="49.1" type="radio" name="49" value="yes"/> Yes
            <input disabled = true id="49.2" type="radio" name="49" value="no"/> No
            <input disabled = true id="49.3" type="radio" name="49" value="idk"/> I don't know





            <h2> Workstation </h2>
            <p>50. Do you have those equipments in your company?  </p>

            <u>Used:</u> equipment used in the business activity_sector

            <u>Not used functional:</u> equipment in working order but no more used by the company (stored)

            <u>Neither used nor functional:</u> out of service equipment (HS) waiting for end of life treatment

            <table class="table">
                <thead>
                    <tr>
                        <th  > Questions </th>
                        <th  >     Used     </th>
                        <th  >     Not used functional     </th>
                        <th  >     Neither used nor functional </th>
                    </tr>
                </thead>
                <tr>
                    <th  > 51. Fixed stations, workstations </th>
                    <td  > <input type="checkbox" name="51" value="u"/> </td>
                    <td  > <input type="checkbox" name="51" value="nuf"/></td>
                    <td  > <input type="checkbox" name="51" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 52. Laptops, digital tablets </th>
                    <td  > <input type="checkbox" name="52" value="u"/> </td>
                    <td  > <input type="checkbox" name="52" value="nuf"/> </td>
                    <td  > <input type="checkbox" name="52" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 53. Small printers &lpar;&lt;15kg, potentially used by a household&rpar; </th>
                    <td  > <input type="checkbox" name="53" value="u"/> </td>
                    <td  > <input type="checkbox" name="53" value="nuf"/> </td>
                    <td  > <input type="checkbox" name="53" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 54. Flat screen monitors </th>
                    <td  > <input type="checkbox" name="54" value="u"/> </td>
                    <td  > <input type="checkbox" name="54" value="nuf"/> </td>
                    <td  > <input type="checkbox" name="54" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 55. Others flat screens &lpar;TV, projections screen, digital board...&rpar; </th>
                    <td  > <input type="checkbox" name="55" value="u"/> </td>
                    <td  > <input type="checkbox" name="55" value="nuf"/> </td>
                    <td  > <input type="checkbox" name="55" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 56. CRT monitors &lpar;monitors or others&rpar; </th>
                    <td  > <input type="checkbox" name="56" value="u"/> </td>
                    <td  > <input type="checkbox" name="56" value="nuf"/> </td>
                    <td  > <input type="checkbox" name="56" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 57. Video projectors </th>
                    <td  > <input type="checkbox" name="57" value="u"/> </td>
                    <td  > <input type="checkbox" name="57" value="nuf"/> </td>
                    <td  > <input type="checkbox" name="57" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 58. Mobile phones </th>
                    <td  > <input type="checkbox" name="58" value="u"/> </td>
                    <td  > <input type="checkbox" name="58" value="nuf"/> </td>
                    <td  > <input type="checkbox" name="58" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 59. Fixed telephones &lpar;standalone not connected to such a standard&rpar; </th>
                    <td  > <input type="checkbox" name="59" value="u"/> </td>
                    <td  > <input type="checkbox" name="59" value="nuf"/> </td>
                    <td  > <input type="checkbox" name="59" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 60. Digital cameras</th>
                    <td  > <input type="checkbox" name="60" value="u"/> </td>
                    <td  > <input type="checkbox" name="60" value="nuf"/> </td>
                    <td  > <input type="checkbox" name="60" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 61. Hard Disk Devices, Storage, Backup </th>
                    <td  > <input type="checkbox" name="61" value="u"/> </td>
                    <td  > <input type="checkbox" name="61" value="nuf"/> </td>
                    <td  > <input type="checkbox" name="61" value="nunf"/> </td>
                </tr>
            </table>

            <p>62. Do you have other devices in your company?  </p>

            Keyboard, mouse, graphic tablets, scanners, microphones, speakers, office equipement...


            <input type="radio" name="62" id="62.1" value="yes"/> Yes
            <input type="radio" name="62" value="no"/> No


            <p>63. Regarding other devices, do you have in your company?  </p>

            <u>Used:</u> equipment used in the business activity_sector

            <u>Not used functional:</u> equipment in working order but no more used by the company (stored)

            <u>Neither used nor functional:</u> out of service equipment (HS) waiting for end of life treatment

            <table class="table">
                <tr>
                    <th  > Questions </th>
                    <th  >     Used     </th>
                    <th  >     Not used functional     </th>
                    <th  >     Neither used nor functional </th>
                </tr>
                <tr>
                    <th  > 64. Keyboards </th>
                    <td  > <input disabled = true id="64.1" type="checkbox" name="64" value="u"/> </td>
                    <td  > <input disabled = true id="64.2" type="checkbox" name="64" value="nuf"/></td>
                    <td  > <input disabled = true id="64.3" type="checkbox" name="64" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 65. Mouse </th>
                    <td  > <input disabled = true id="65.1" type="checkbox" name="65" value="u"/> </td>
                    <td  > <input disabled = true id="65.2" type="checkbox" name="65" value="nuf"/> </td>
                    <td  > <input disabled = true id="65.3" type="checkbox" name="65" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 66. Graphic tablets </th>
                    <td  > <input disabled = true id="66.1" type="checkbox" name="66" value="u"/> </td>
                    <td  > <input disabled = true id="66.2" type="checkbox" name="66" value="nuf"/> </td>
                    <td  > <input disabled = true id="66.3" type="checkbox" name="66" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 67. Scanners </th>
                    <td  > <input disabled = true id="67.1" type="checkbox" name="67" value="u"/> </td>
                    <td  > <input disabled = true id="67.2" type="checkbox" name="67" value="nuf"/> </td>
                    <td  > <input disabled = true id="67.3" type="checkbox" name="67" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 68. Speakers </th>
                    <td  > <input disabled = true id="68.1" type="checkbox" name="68" value="u"/> </td>
                    <td  > <input disabled = true id="68.2" type="checkbox" name="68" value="nuf"/> </td>
                    <td  > <input disabled = true id="68.3" type="checkbox" name="68" value="nunf"/> </td>
                </tr>
                <tr>
                    <th  > 69. Office automation </th>
                    <td  > <input disabled = true id="69.1" type="checkbox" name="69" value="u"/> </td>
                    <td  > <input disabled = true id="69.2" type="checkbox" name="69" value="nuf"/> </td>
                    <td  > <input disabled = true id="69.3" type="checkbox" name="69" value="nunf"/> </td>
                </tr>
            </table>



            <h2 id="energy"> Energy consumption </h2>
            <p>70. Do you know the consumption of your workstation in kWh per year?  </p>


            <input type="radio" name="70" value="yes"/> Yes
            <p>If yes, please specify how much in kWh per year </p>
            <input class="form-control" type="text" name="70" value="0"/> kWh per year

            <input type="radio" name="70" value="no"/> No


            <p>71. Do you track the energy consumption of your company activities?  </p>


            <input type="radio" name="71" value="yes"/> Yes
            <input type="radio" name="71" value="no"/> No
            <input type="radio" name="71" value="idk"/> I don't know


            <p>72. Do you know the share of IT and IT equipment in your company's total energy consumption?  </p>


            <input type="radio" name="72" value="yes"/> Yes
            If yes, please specify how much in % 
            <input class="form-control" type="text" name="72" value="0"/> 

            <input type="radio" name="72" value="no"/> No


            <p>73. Have you set up a power management system? &lpar;automatic shutdown / shutdown of workstation&rpar;?  </p>


            <input type="radio" name="73" value="yes"/> Yes
            <input type="radio" name="73" value="no"/> No
            <input type="radio" name="73" value="idk"/> I don't know





            <h2 id="printing"> Printing </h2>
            <p>74. Do you use copiers from a repackaging industry &lpar;second-hand / second-hand&rpar;</p> 


            <input type="radio" name="74" value="yes"/> Yes
            <input type="radio" name="74" value="no"/> No
            <input type="radio" name="74" value="idk"/> I don't know


            <p>75. Do you conslidate individual printers to shared printers ?  </p>


            <input type="radio" name="75" value="yes"/> Yes
            <input type="radio" name="75" value="no"/> No
            <input type="radio" name="75" value="idk"/> I don't know


            <p>76. Have you set up an identification system on printers &lpar;to trigger printing&rpar;?  </p>


            <input type="radio" name="76" value="yes"/> Yes
            <input type="radio" name="76" value="no"/> No
            <input type="radio" name="76" value="idk"/> I don't know


            <p>78. Are your printers set by default in eco mode / MFP?  </p>


            <table class="table">
                <tr>
                    <th  > Questions </th>
                    <th  >     Yes     </th>
                    <th  >     No     </th>
                    <th  >     I don't know </th>
                </tr>
                <tr>
                    <th  > 79. Energy saving &lpar;Automatic standby&rpar; </th>
                    <td> <input type="radio" name="79" value="yes"/> </td>
                    <td> <input type="radio" name="79" value="no"/></td>
                    <td  > <input type="radio" name="79" value="idk"/> </td>
                </tr>
                <tr>
                    <th  > 80. Black and white by default </th>
                    <td  > <input type="radio" name="80" value="yes"/> </td>
                    <td  > <input type="radio" name="80" value="no"/></td>
                    <td  > <input type="radio" name="80" value="idk"/> </td>
                </tr>
                <tr>
                    <th  > 81. Default duplex </th>
                    <td  > <input type="radio" name="81" value="yes"/> </td>
                    <td  > <input type="radio" name="81" value="no"/></td>
                    <td  > <input type="radio" name="81" value="idk"/> </td>
                </tr>
                <tr>
                    <th  > 82. Default draft mode </th>
                    <td  > <input type="radio" name="82" value="yes"/> </td>
                    <td  > <input type="radio" name="82" value="no"/></td>
                    <td  > <input type="radio" name="82" value="idk"/> </td>
                </tr>
            </table>



            <h2> Consumables </h2>
            <p>83. What is the number of pages printed per day per employee? &lpar;A4 equivalent&rpar; </p>


            <input type="radio" name="83" value="1"/> Less than 10
            <input type="radio" name="83" value="20"/> From 10 to 20
            <input type="radio" name="83" value="30"/> From 20 to 30
            <input type="radio" name="83" value="30+"/> More than 30
            <input type="radio" name="83" value="idk"/> I don't know


            <p>84. Can you specify the number of cartridges/ toners:  </p>

            <p>Cartridges used a year</p>
            <input class="form-control" type="text" name="84" value="0" maxlength="5"/>

            <p>Cartridges stored in the average business </p>
            <input class="form-control" type="text" name="84" value="0" maxlength="5"/>

            <p>Toners used a year </p>
            <input class="form-control" type="text" name="84" value="0" maxlength="5"/>

            <p>Toners stored in the average business </p>
            <input class="form-control" type="text" name="84" value="0" maxlength="5"/>

            <p>85. Do you organize the separate collection of waste cartridges / toners?  </p>


            <input type="radio" name="85" value="yesri"/> Yes, to a repackaging industry
            <input type="radio" name="85" value="yesrc"/> Yes, towards a recycling channel &lpar;destruction&rpar;
            <input type="radio" name="85" value="no"/> No, no separate collection device is planned

            <p>86. Do you prefer the use of recycled paper?  </p>


            <input type="checkbox" name="86" value="yesvp"/> Yes, our paper is made from virgin paste
            <input type="checkbox" name="86" value="yesmp"/> Yes, mixed paper
            <input type="checkbox" name="86" value="yesr"/> Yes, 100% recycled
            <input type="checkbox" name="86" value="no"/> I'm not paying attention


            <p>87. Do you choose paper?  </p>


            <input type="checkbox" name="87" value="yesfsc"/> Yes, FSC
            <input type="checkbox" name="87" value="yespefc"/> Yes,PEFC
            <input type="checkbox" name="87" value="yesba"/> Yes, Blue Angel
            <input type="checkbox" name="87" value="yesel"/> Yes, European Label
            <input type="checkbox" name="87" value="yeso"/> Yes, other
            <input class="form-control" type="text" name="87" value="text" maxlength="20">
            <input type="checkbox" name="87" value="no"/> I'm not paying attention


            <p>88. Do you organize the separate collection of waste paper for recycling?  </p>


            <input type="radio" name="88" value="yes"/> Yes
            <input type="radio" name="88" value="no"/> No
            <input type="radio" name="88" value="idk"/> I don't know



		<p>Merci de votre participation à ce quizz, le rapport sera bientôt disponible sur le site de l'AGIT</p>
        </form>

        <script>
            /*
            var a = document.getElementById("4.2");
				a.addEventListener("change", function () {
					var x = document.getElementById("4.2").value;
					console.log(x);
					document.getElementById("12.1").disabled = false;
					document.getElementById("12.2").disabled = false;
				});
                */
            var primaryQuestion = [4.1,12.2,13.2,39.1,6.1]
            var questionTable = [  [5.1,6.1,6.2,6.3,7.1,7.2,7.3,8.1,8.2,8.3,9.1,9.2,9.3,10.1,10.2,10.3,11.1,11.2,11.3,11.4],
                                 [13.1,13.2],
                                 [14.1,14.2,14.3,15.1,15.2,15.3,16.1,16.2,16.3,16.4,17.1,17.2,17.3,17.4,18.1,18.2,18.3,19.1,19.2,19.3,20.1,20.2,20.3,21.1,21.2,21.3,22.1,22.2,22.3,23.1,23.2,23.3,24.1,24.2,24.3,25.1,25.2,25.3,26.1,26.2,26.3,27.1,27.2,27.3,28.1,28.2,28.3,29.1,29.2,29.3,30.1,30.2,30.3],
                                 [40.1,41.1,42.1,42.2,42.3,42.4,43.1,43.2,43.3,43.4,44.1,44.2,44.3,45.1,45.2,45.3,46.1,46.2,46.3,47.1,47.2,47.3,47.4,48.1,48.2,48.3,49.1,49.2,49.3],
                                 [64.1,64.2,64.3,65.1,65.2,65.3,66.1,66.2,66.3,67.1,67.2,67.3,68.1,68.2,68.3,69.1,69.2,69.3]];
            var listenerTable=[];
            for(var i = 0; i < primaryQuestion.length; i++){
                listenerTable.push(document.getElementById(primaryQuestion[i]));
                console.log(listenerTable[i]);
                listenerTable[i].addEventListener("change",
                                            function(){ console.log(this);
                                                       i=0;
                                                       while(i<primaryQuestion.length){
                                                             if(primaryQuestion[i]== this.id){
                                                                 break;
                                                             }
                                                           i++;
                                                             }
                                                        console.log(questionTable[i]);
                                                        enabler(primaryQuestion[i],questionTable[i])
                                                        console.log(questionTable[i]);
                                                        }
                                  );
                
                console.log("lo");
            }

            function enabler(elementId,tableResponses){
                console.log("enabler");
                for(var i = 0; i < tableResponses.length; i++){
                 
                    document.getElementById(String(tableResponses[i])).disabled = false;//!this.checked;
                }
            }

        </script>

    </body> 
</html>

<?php 
if(isset($_POST['save']))
{
    $num=uniqid();
    $file = fopen($num.".csv","w");
    fputcsv($file,array('Question','Reponse'));

    for($i=1; $i<=88; $i++)
    {
        if(($i>=51 && $i<=61) || ($i>=64 && $i<=69) ||($i>=79 && $i<=82) ||$i==86||$i==87)
        {
            // inserer plusieurs réponsse dans le csv
        }
        else {
            if( substr($_POST[$i],0,3) === $i."_") 
            {
                fputcsv($file,array( $_POST[$i],$_POST[$_POST[$i]] ));
            }
            else{
                fputcsv($file,array($i,$_POST[$i]));
            } 
        }
    }
    fclose($file);
}
echo "51.75.249.195?id=".$num;
?>