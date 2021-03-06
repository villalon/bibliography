<?php 
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package local
 * @subpackage bibliography
 * @copyright 2015 Jorge Villalon
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 */
function local_bibliography_download_urls()
{
    global $DB;
    
    $testxml = '
<sear:SEGMENTS xmlns:sear="http://www.exlibrisgroup.com/xsd/jaguar/search"><sear:JAGROOT><sear:RESULT><sear:QUERYTRANSFORMS/><sear:FACETLIST ACCURATE_COUNTERS="true"><sear:FACET NAME="creator" COUNT="6"><sear:FACET_VALUES KEY="Wood, R" VALUE="1"/><sear:FACET_VALUES KEY="Haeussler, E" VALUE="2"/><sear:FACET_VALUES KEY="Hildebrand, D" VALUE="1"/><sear:FACET_VALUES KEY="Paul, R" VALUE="2"/><sear:FACET_VALUES KEY="Ott, L" VALUE="1"/><sear:FACET_VALUES KEY="Murrieta Murrieta, J" VALUE="1"/></sear:FACET><sear:FACET NAME="lang" COUNT="2"><sear:FACET_VALUES KEY="und" VALUE="1"/><sear:FACET_VALUES KEY="spa" VALUE="2"/></sear:FACET><sear:FACET NAME="rtype" COUNT="1"><sear:FACET_VALUES KEY="books" VALUE="3"/></sear:FACET><sear:FACET NAME="topic" COUNT="15"><sear:FACET_VALUES KEY="ESTADISTICA" VALUE="1"/><sear:FACET_VALUES KEY="NUMEROS INDICES" VALUE="1"/><sear:FACET_VALUES KEY="Economía matemática" VALUE="1"/><sear:FACET_VALUES KEY="Muestreo" VALUE="1"/><sear:FACET_VALUES KEY="DECISIONES ESTADISTICAS" VALUE="1"/><sear:FACET_VALUES KEY="Matemáticas" VALUE="1"/><sear:FACET_VALUES KEY="ANALISIS DE VARIANCIA" VALUE="1"/><sear:FACET_VALUES KEY="Análisis matemático" VALUE="1"/><sear:FACET_VALUES KEY="ADMINISTRACION" VALUE="1"/><sear:FACET_VALUES KEY="Libros electrónicos" VALUE="1"/><sear:FACET_VALUES KEY="ECUACIONES LINEALES" VALUE="1"/><sear:FACET_VALUES KEY="Probabilidades" VALUE="1"/><sear:FACET_VALUES KEY="Matemáticas financieras" VALUE="2"/><sear:FACET_VALUES KEY="ANALISIS DE REGRESION" VALUE="1"/><sear:FACET_VALUES KEY="Programación lineal" VALUE="1"/></sear:FACET><sear:FACET NAME="tlevel" COUNT="2"><sear:FACET_VALUES KEY="online_resources" VALUE="1"/><sear:FACET_VALUES KEY="available" VALUE="2"/></sear:FACET><sear:FACET NAME="pfilter" COUNT="1"><sear:FACET_VALUES KEY="books" VALUE="3"/></sear:FACET><sear:FACET NAME="creationdate" COUNT="3"><sear:FACET_VALUES KEY="2008" VALUE="1"/><sear:FACET_VALUES KEY="1998" VALUE="1"/><sear:FACET_VALUES KEY="2003" VALUE="1"/></sear:FACET><sear:FACET NAME="library" COUNT="2"><sear:FACET_VALUES KEY="UAISAN" VALUE="2"/><sear:FACET_VALUES KEY="UAIVINA" VALUE="2"/></sear:FACET></sear:FACETLIST><sear:DOCSET HIT_TIME="27" TOTALHITS="3" FIRSTHIT="1" LASTHIT="3" TOTAL_TIME="50" IS_LOCAL="true"><sear:DOC ID="1246556" RANK="0.99999994" NO="1" SEARCH_ENGINE="Local Search Engine" SEARCH_ENGINE_TYPE="Local Search Engine"><PrimoNMBib xmlns="http://www.exlibrisgroup.com/xsd/primo/primo_nm_bib">
<record>
<control>
<sourcerecordid>000051192</sourcerecordid> 
<sourceid>uai_aleph</sourceid> 
<recordid>uai_aleph000051192</recordid> 
<originalsourceid>UAI01</originalsourceid> 
<ilsapiid>UAI01000051192</ilsapiid> 
<sourceformat>MARC21</sourceformat> 
<sourcesystem>Aleph</sourcesystem> 
</control>
<display>
<type>book</type> 
<title>Matemáticas para administración y economía</title> 
<creator>Ernest F. Haeussler</creator> 
<contributor>Richard S Paul; Richard J Wood; Jesús Elmer Murrieta Murrieta traductor</contributor> 
<edition>12a edición..</edition> 
<publisher>Naucalpan de Juárez, México : Pearson Educación de México</publisher> 
<creationdate>2008</creationdate> 
<format>xii, 887 páginas : ilustraciones..</format> 
<identifier>$$V9789702611479; $$V9786074425581 (libro electrónico)</identifier> 
<subject>Análisis matemático; Economía matemática; Matemáticas financieras; Libros electrónicos</subject> 
<language>spa</language> 
<source>uai_aleph</source> 
<unititle>Introductory mathematical analysis for business, economics, and the life and social sciences.</unititle> 
<lds01>MAT110</lds01> 
<lds02>000051192</lds02> 
<lds04>Traducción de Introductory mathematical analysis for business, economics, and the life and social sciences.</lds04> 
<version>2</version></display>
<links>
<openurl>$$Topenurl_journal</openurl> 
<backlink>$$Taleph_backlink$$Ebacklink</backlink> 
<linktorsrc>$$Uhttp://uai.libricentro.com/libro.php?libroId=33$$DTexto completo Libro electrónico accesible vía Web$$Elinktorsrc</linktorsrc> 
<thumbnail>$$Tgoogle_thumb</thumbnail> 
<openurlfulltext>$$Topenurlfull_journal</openurlfulltext> 
<linktoholdings>$$Taleph_holdings</linktoholdings> 
<linktoprice>$$Uhttp://www.amazon.com/gp/product/9789702611479$$Uhttp://www.amazon.com/gp/product/9786074425581 (libro electrónico)</linktoprice> 
<lln01><![CDATA[$$Uhttp://www.google.com/search?tbm=bks&tbo=1&hl=es&q=isbn=9789702611479$$Uhttp://www.google.com/search?tbm=bks&tbo=1&hl=es&q=isbn=9786074425581 (libro electrónico)]]></lln01> 
<lln02>$$Uhttp://www.uai.cl/forms/biblioteca/bibliografia/</lln02> 
</links>
<search>
<creatorcontrib>Ernest F.  Haeussler</creatorcontrib> 
<creatorcontrib>Haeussler, E</creatorcontrib> 
<creatorcontrib>[por] Ernest F. Haeussler, Richard S. Paul, Richard J. Wood ; traducción Jesús Elmer Murrieta Murrieta.</creatorcontrib> 
<creatorcontrib>Richard S.  Paul</creatorcontrib> 
<creatorcontrib>Richard J.  Wood</creatorcontrib> 
<creatorcontrib>Jesús Elmer  Murrieta Murrieta  traductor</creatorcontrib> 
<creatorcontrib>Paul, R</creatorcontrib> 
<creatorcontrib>Wood, R</creatorcontrib> 
<creatorcontrib>Murrieta Murrieta, J</creatorcontrib> 
<title>Matemáticas para administración y economía</title> 
<subject>Análisis matemático.</subject> 
<subject>Economía matemática.</subject> 
<subject>Matemáticas financieras.</subject> 
<subject>Libros electrónicos.</subject> 
<subject>Aritmética comercial</subject> 
<subject>Finanzas Matemáticas</subject> 
<subject>Negocios Matemáticas</subject> 
<general>Pearson Educación de México,</general> 
<general>[recurso electrónico] /</general> 
<sourceid>uai_aleph</sourceid> 
<recordid>uai_aleph000051192</recordid> 
<isbn>9789702611479</isbn> 
<isbn>9786074425581</isbn> 
<rsrctype>book</rsrctype> 
<creationdate>2008</creationdate> 
<searchscope>uai_aleph</searchscope> 
<searchscope>UAI</searchscope> 
<scope>uai_aleph</scope> 
<scope>UAI</scope> 
<alttitle>Introductory mathematical analysis for business, economics, and the life and social sciences.</alttitle> 
<lsr01>MAT110</lsr01> 
<lsr04>650.01513 H137m12</lsr04> 
<lsr02>Pearson Educación de México</lsr02> 
<lsr03>mx</lsr03> 
<lsr09>Traducción de Introductory mathematical analysis for business, economics, and the life and social sciences.</lsr09> 
</search>
<sort>
<title>Matemáticas para administración y economía</title> 
<creationdate>2008</creationdate> 
<author>Haeussler, Ernest F.</author> 
</sort>
<facets>
<language>spa</language> 
<creationdate>2008</creationdate> 
<topic>Análisis matemático</topic> 
<topic>Economía matemática</topic> 
<topic>Matemáticas financieras</topic> 
<topic>Libros electrónicos</topic> 
<toplevel>online_resources</toplevel> 
<prefilter>books</prefilter> 
<rsrctype>books</rsrctype> 
<creatorcontrib>Haeussler, E</creatorcontrib> 
<creatorcontrib>Paul, R</creatorcontrib> 
<creatorcontrib>Wood, R</creatorcontrib> 
<creatorcontrib>Murrieta Murrieta, J</creatorcontrib> 
<frbrgroupid>43158410</frbrgroupid><frbrtype>5</frbrtype></facets>
<dedup>
<t>1</t> 
<c2>UAI9789702611479;UAI9786074425581</c2> 
<c3>matematicasparaadminconomiaUAI</c3> 
<c4>2008</c4> 
<f3>9789702611479;9786074425581</f3> 
<f5>matematicasparaadminnyeconomia</f5> 
<f6>2008</f6> 
<f7>matematicas para administracion y economia</f7> 
<f8>mx</f8> 
<f9>xii, 887 páginas :</f9> 
<f10>pearson educacion de mexico</f10> 
<f11>haeussler ernest f</f11> 
</dedup>
<frbr>
<t>1</t> 
<k1>$$Kuaihaeussler ernest f$$AA</k1> 
<k3>$$Kuaiintroductory mathematical analysis for business economics and the life and social sciences$$AT</k3> 
<k3>$$Kuaimatematicas para administracion y economia$$AT</k3> 
</frbr>
<delivery>
<institution>UAI</institution> 
<delcategory>Online Resource</delcategory> 
</delivery>
<ranking>
<booster1>1</booster1> 
<booster2>1</booster2> 
</ranking>
<addata>
<aulast>Haeussler</aulast> 
<aufirst>Ernest F.</aufirst> 
<au>Haeussler, Ernest F</au> 
<addau>Paul, Richard S</addau> 
<addau>Wood, Richard J</addau> 
<addau>Murrieta Murrieta, Jesús Elmer traductor</addau> 
<btitle>Matemáticas para administración y economía</btitle> 
<date>2008</date> 
<risdate>2008.</risdate> 
<isbn>9789702611479</isbn> 
<isbn>9786074425581</isbn> 
<format>book</format> 
<genre>book</genre> 
<ristype>BOOK</ristype> 
<cop>Naucalpan de Juárez, México</cop> 
<pub>Pearson Educación de México</pub> 
</addata>
</record></PrimoNMBib><sear:GETIT deliveryCategory="Online Resource" GetIt1="http://uai.libricentro.com/libro.php?libroId=33" GetIt2="http://200.38.75.91:3410/sfxuai41?ctx_ver=Z39.88-2004&amp;ctx_enc=info:ofi/enc:UTF-8&amp;ctx_tim=2015-05-21T15%3A47%3A44IST&amp;url_ver=Z39.88-2004&amp;url_ctx_fmt=infofi/fmt:kev:mtx:ctx&amp;rfr_id=info:sid/primo.exlibrisgroup.com:primo3-Journal-uai_aleph&amp;rft_val_fmt=info:ofi/fmt:kev:mtx:book&amp;rft.genre=book&amp;rft.atitle=&amp;rft.jtitle=&amp;rft.btitle=Matemáticas%20para%20administración%20y%20economía&amp;rft.aulast=Haeussler&amp;rft.auinit=&amp;rft.auinit1=&amp;rft.auinitm=&amp;rft.ausuffix=&amp;rft.au=Haeussler%2C%20Ernest%20F&amp;rft.aucorp=&amp;rft.volume=&amp;rft.issue=&amp;rft.part=&amp;rft.quarter=&amp;rft.ssn=&amp;rft.spage=&amp;rft.epage=&amp;rft.pages=&amp;rft.artnum=&amp;rft.issn=&amp;rft.eissn=&amp;rft.isbn=9789702611479&amp;rft.sici=&amp;rft.coden=&amp;rft_id=info:doi/&amp;rft.object_id=&amp;rft_dat=&lt;uai_aleph>000051192&lt;/uai_aleph>&lt;grp_id>43158410&lt;/grp_id>&lt;oa>&lt;/oa>&amp;rft.eisbn=&amp;rft_id=info:oai/&amp;req.language="/><sear:LINKS><sear:openurl><![CDATA[http://200.38.75.91:3410/sfxuai41?ctx_ver=Z39.88-2004&ctx_enc=info:ofi/enc:UTF-8&ctx_tim=2015-05-21T15%3A47%3A44IST&url_ver=Z39.88-2004&url_ctx_fmt=infofi/fmt:kev:mtx:ctx&rfr_id=info:sid/primo.exlibrisgroup.com:primo3-Journal-uai_aleph&rft_val_fmt=info:ofi/fmt:kev:mtx:book&rft.genre=book&rft.atitle=&rft.jtitle=&rft.btitle=Matemáticas%20para%20administración%20y%20economía&rft.aulast=Haeussler&rft.auinit=&rft.auinit1=&rft.auinitm=&rft.ausuffix=&rft.au=Haeussler%2C%20Ernest%20F&rft.aucorp=&rft.volume=&rft.issue=&rft.part=&rft.quarter=&rft.ssn=&rft.spage=&rft.epage=&rft.pages=&rft.artnum=&rft.issn=&rft.eissn=&rft.isbn=9789702611479&rft.sici=&rft.coden=&rft_id=info:doi/&rft.object_id=&rft_dat=<uai_aleph>000051192</uai_aleph><grp_id>43158410</grp_id><oa></oa>&rft.eisbn=&rft_id=info:oai/&req.language=]]></sear:openurl><sear:backlink>http://aleph.uai.cl/F?func=direct&amp;local_base=UAI01&amp;doc_number=000051192</sear:backlink><sear:linktorsrc>http://uai.libricentro.com/libro.php?libroId=33</sear:linktorsrc><sear:thumbnail>http://books.google.com/books?bibkeys=ISBN:9702611474,OCLC:,LCCN:&amp;jscmd=viewapi&amp;callback=updateGBSCover</sear:thumbnail><sear:openurlfulltext><![CDATA[http://200.38.75.91:3410/sfxuai41?ctx_ver=Z39.88-2004&ctx_enc=info:ofi/enc:UTF-8&ctx_tim=2015-05-21T15%3A47%3A44IST&url_ver=Z39.88-2004&url_ctx_fmt=infofi/fmt:kev:mtx:ctx&rfr_id=info:sid/primo.exlibrisgroup.com:primo3-Journal-uai_aleph&rft_val_fmt=info:ofi/fmt:kev:mtx:book&rft.genre=book&rft.atitle=&rft.jtitle=&rft.btitle=Matemáticas%20para%20administración%20y%20economía&rft.aulast=Haeussler&rft.auinit=&rft.auinit1=&rft.auinitm=&rft.ausuffix=&rft.au=Haeussler%2C%20Ernest%20F&rft.aucorp=&rft.volume=&rft.issue=&rft.part=&rft.quarter=&rft.ssn=&rft.spage=&rft.epage=&rft.pages=&rft.artnum=&rft.issn=&rft.eissn=&rft.isbn=9789702611479&rft.sici=&rft.coden=&rft_id=info:doi/&rft.object_id=&svc_val_fmt=info:ofi/fmt:kev:mtx:sch_svc&svc.fulltext=yes&rft_dat=<uai_aleph>000051192</uai_aleph><grp_id>43158410</grp_id><oa></oa>&rft.eisbn=&rft_id=info:oai/&req.language=]]></sear:openurlfulltext><sear:linktoholdings>OVP</sear:linktoholdings><sear:linktoprice>http://www.amazon.com/gp/product/9789702611479</sear:linktoprice><sear:lln01>http://www.google.com/search?tbm=bks&amp;tbo=1&amp;hl=es&amp;q=isbn=9789702611479</sear:lln01><sear:lln02>http://www.uai.cl/forms/biblioteca/bibliografia/</sear:lln02></sear:LINKS></sear:DOC><sear:DOC ID="1526370" RANK="0.57142854" NO="2" SEARCH_ENGINE="Local Search Engine" SEARCH_ENGINE_TYPE="Local Search Engine"><PrimoNMBib xmlns="http://www.exlibrisgroup.com/xsd/primo/primo_nm_bib">
<record>
<control>
<sourcerecordid>000028113</sourcerecordid> 
<sourceid>uai_aleph</sourceid> 
<recordid>uai_aleph000028113</recordid> 
<originalsourceid>UAI01</originalsourceid> 
<ilsapiid>UAI01000028113</ilsapiid> 
<sourceformat>MARC21</sourceformat> 
<sourcesystem>Aleph</sourcesystem> 
</control>
<display>
<type>book</type> 
<title>Estadistica aplicada a la administracion y a la economia.</title> 
<creator>David K Hildebrand</creator> 
<contributor>Lyman Ott</contributor> 
<edition>3.ed.</edition> 
<publisher>Mexico, MX : Addison-Wesley</publisher> 
<creationdate>1998</creationdate> 
<format>943p : ind.glos.tbls.graf..</format> 
<identifier>$$V968444317X</identifier> 
<subject>ESTADISTICA; Probabilidades; ADMINISTRACION; MUESTREO; ANALISIS DE VARIANCIA; ANALISIS DE REGRESION; NUMEROS INDICES; DECISIONES ESTADISTICAS</subject> 
<source>uai_aleph</source> 
<availlibrary>$$IUAI$$LUAISAN$$2(519.5 H642e3 )$$Savailable$$330$$40$$5N$$658$$XUAI50$$YSAN$$ZRE</availlibrary> 
<availlibrary>$$IUAI$$LUAIVINA$$2(519.5 H642e3 )$$Savailable$$318$$42$$5N$$6128$$XUAI50$$YVINA$$ZRE</availlibrary> 
<lds01>MAT110</lds01> 
<lds02>000028113</lds02> 
<lds04>Curso Probabilidades e Inferencia Curso Estadistica Metodos Estadisticos Copia Activo-SAN</lds04> 
<availinstitution>$$IUAI$$Savailable</availinstitution><availpnx>available</availpnx></display>
<links>
<openurl>$$Topenurl_journal</openurl> 
<backlink>$$Taleph_backlink$$Ebacklink</backlink> 
<thumbnail>$$Tgoogle_thumb</thumbnail> 
<openurlfulltext>$$Topenurlfull_journal</openurlfulltext> 
<linktoholdings>$$Taleph_holdings</linktoholdings> 
<linktoprice>$$Uhttp://www.amazon.com/gp/product/968444317X</linktoprice> 
<lln01>$$Uhttp://www.google.com/search?tbm=bks&amp;tbo=1&amp;hl=es&amp;q=isbn=968444317X</lln01> 
<lln02>$$Uhttp://www.uai.cl/forms/biblioteca/bibliografia/</lln02> 
</links>
<search>
<creatorcontrib>David K  Hildebrand</creatorcontrib> 
<creatorcontrib>Hildebrand, D</creatorcontrib> 
<creatorcontrib>Lyman  Ott</creatorcontrib> 
<creatorcontrib>Ott, L</creatorcontrib> 
<title>Estadistica aplicada a la administracion y a la economia.</title> 
<subject>ESTADISTICA</subject> 
<subject>Probabilidades.</subject> 
<subject>ADMINISTRACION</subject> 
<subject>MUESTREO</subject> 
<subject>ANALISIS DE VARIANCIA</subject> 
<subject>ANALISIS DE REGRESION</subject> 
<subject>NUMEROS INDICES</subject> 
<subject>DECISIONES ESTADISTICAS</subject> 
<subject>Probabililades</subject> 
<general>Addison-Wesley,</general> 
<sourceid>uai_aleph</sourceid> 
<recordid>uai_aleph000028113</recordid> 
<isbn>968444317X</isbn> 
<rsrctype>book</rsrctype> 
<creationdate>1998</creationdate> 
<searchscope>uai_aleph</searchscope> 
<searchscope>UAISAN</searchscope> 
<searchscope>UAIVINA</searchscope> 
<searchscope>UAI</searchscope> 
<scope>uai_aleph</scope> 
<scope>UAISAN</scope> 
<scope>UAIVINA</scope> 
<scope>UAI</scope> 
<lsr01>MAT110</lsr01> 
<lsr04>519.5 H642e3</lsr04> 
<lsr02>Addison-Wesley</lsr02> 
<lsr03>mx</lsr03> 
<lsr09>Curso Probabilidades e Inferencia Curso Estadistica Metodos Estadisticos Copia Activo-SAN</lsr09> 
</search>
<sort>
<title>Estadistica aplicada a la administracion y a la economia.</title> 
<creationdate>1998</creationdate> 
<author>Hildebrand, David K</author> 
</sort>
<facets>
<language>und</language> 
<creationdate>1998</creationdate> 
<topic>ESTADISTICA</topic> 
<topic>Probabilidades</topic> 
<topic>ADMINISTRACION</topic> 
<topic>MUESTREO</topic> 
<topic>ANALISIS DE VARIANCIA</topic> 
<topic>ANALISIS DE REGRESION</topic> 
<topic>NUMEROS INDICES</topic> 
<topic>DECISIONES ESTADISTICAS</topic> 
<toplevel>available</toplevel> 
<prefilter>books</prefilter> 
<rsrctype>books</rsrctype> 
<creatorcontrib>Hildebrand, D</creatorcontrib> 
<creatorcontrib>Ott, L</creatorcontrib> 
<library>UAISAN</library> 
<library>UAIVINA</library> 
<frbrgroupid>43195231</frbrgroupid><frbrtype>6</frbrtype></facets>
<dedup>
<t>1</t> 
<c2>UAI968444317X</c2> 
<c3>estadisticaaplicadaaconomiaUAI</c3> 
<c4>1998</c4> 
<f3>968444317X</f3> 
<f5>estadisticaaplicadaalaeconomia</f5> 
<f6>1998</f6> 
<f7>estadistica aplicada a la administracion y a la economia</f7> 
<f8>mx</f8> 
<f9>943p :</f9> 
<f10>addison wesley</f10> 
<f11>hildebrand david k</f11> 
</dedup>
<frbr>
<t>1</t> 
<k1>$$Kuaihildebrand david k$$AA</k1> 
<k3>$$Kuaiestadistica aplicada a la administracion y a la economia$$AT</k3> 
</frbr>
<delivery>
<institution>UAI</institution> 
<delcategory>Physical Item</delcategory> 
</delivery>
<ranking>
<booster1>1</booster1> 
<booster2>1</booster2> 
</ranking>
<addata>
<aulast>Hildebrand</aulast> 
<aufirst>David K</aufirst> 
<au>Hildebrand, David K</au> 
<addau>Ott, Lyman</addau> 
<btitle>Estadistica aplicada a la administracion y a la economia.</btitle> 
<date>1998</date> 
<risdate>1998.</risdate> 
<isbn>968444317X</isbn> 
<format>book</format> 
<ristype>BOOK</ristype> 
<cop>Mexico, MX</cop> 
<pub>Addison-Wesley</pub> 
</addata>
<browse>
<callnumber>$$IUAI$$D519.5 H642e3$$E519.500000000 h642e3$$T1</callnumber> 
</browse>
</record></PrimoNMBib><sear:GETIT deliveryCategory="Physical Item" GetIt1="OVP" GetIt2="http://200.38.75.91:3410/sfxuai41?ctx_ver=Z39.88-2004&amp;ctx_enc=info:ofi/enc:UTF-8&amp;ctx_tim=2015-05-21T15%3A47%3A44IST&amp;url_ver=Z39.88-2004&amp;url_ctx_fmt=infofi/fmt:kev:mtx:ctx&amp;rfr_id=info:sid/primo.exlibrisgroup.com:primo3-Journal-uai_aleph&amp;rft_val_fmt=info:ofi/fmt:kev:mtx:book&amp;rft.genre=&amp;rft.atitle=&amp;rft.jtitle=&amp;rft.btitle=Estadistica%20aplicada%20a%20la%20administracion%20y%20a%20la%20economia.&amp;rft.aulast=Hildebrand&amp;rft.auinit=&amp;rft.auinit1=&amp;rft.auinitm=&amp;rft.ausuffix=&amp;rft.au=Hildebrand%2C%20David%20K&amp;rft.aucorp=&amp;rft.volume=&amp;rft.issue=&amp;rft.part=&amp;rft.quarter=&amp;rft.ssn=&amp;rft.spage=&amp;rft.epage=&amp;rft.pages=&amp;rft.artnum=&amp;rft.issn=&amp;rft.eissn=&amp;rft.isbn=968444317X&amp;rft.sici=&amp;rft.coden=&amp;rft_id=info:doi/&amp;rft.object_id=&amp;rft_dat=&lt;uai_aleph>000028113&lt;/uai_aleph>&lt;grp_id>43195231&lt;/grp_id>&lt;oa>&lt;/oa>&amp;rft.eisbn=&amp;rft_id=info:oai/&amp;req.language="/><sear:LIBRARIES><sear:LIBRARY><sear:institution>UAI</sear:institution><sear:library>UAISAN</sear:library><sear:status>available</sear:status><sear:collection/><sear:callNumber>(519.5 H642e3 )</sear:callNumber><sear:url>OVP</sear:url></sear:LIBRARY><sear:LIBRARY><sear:institution>UAI</sear:institution><sear:library>UAIVINA</sear:library><sear:status>available</sear:status><sear:collection/><sear:callNumber>(519.5 H642e3 )</sear:callNumber><sear:url>OVP</sear:url></sear:LIBRARY></sear:LIBRARIES><sear:LINKS><sear:openurl><![CDATA[http://200.38.75.91:3410/sfxuai41?ctx_ver=Z39.88-2004&ctx_enc=info:ofi/enc:UTF-8&ctx_tim=2015-05-21T15%3A47%3A44IST&url_ver=Z39.88-2004&url_ctx_fmt=infofi/fmt:kev:mtx:ctx&rfr_id=info:sid/primo.exlibrisgroup.com:primo3-Journal-uai_aleph&rft_val_fmt=info:ofi/fmt:kev:mtx:book&rft.genre=&rft.atitle=&rft.jtitle=&rft.btitle=Estadistica%20aplicada%20a%20la%20administracion%20y%20a%20la%20economia.&rft.aulast=Hildebrand&rft.auinit=&rft.auinit1=&rft.auinitm=&rft.ausuffix=&rft.au=Hildebrand%2C%20David%20K&rft.aucorp=&rft.volume=&rft.issue=&rft.part=&rft.quarter=&rft.ssn=&rft.spage=&rft.epage=&rft.pages=&rft.artnum=&rft.issn=&rft.eissn=&rft.isbn=968444317X&rft.sici=&rft.coden=&rft_id=info:doi/&rft.object_id=&rft_dat=<uai_aleph>000028113</uai_aleph><grp_id>43195231</grp_id><oa></oa>&rft.eisbn=&rft_id=info:oai/&req.language=]]></sear:openurl><sear:backlink>http://aleph.uai.cl/F?func=direct&amp;local_base=UAI01&amp;doc_number=000028113</sear:backlink><sear:thumbnail>http://books.google.com/books?bibkeys=ISBN:968444317X,OCLC:,LCCN:&amp;jscmd=viewapi&amp;callback=updateGBSCover</sear:thumbnail><sear:openurlfulltext><![CDATA[http://200.38.75.91:3410/sfxuai41?ctx_ver=Z39.88-2004&ctx_enc=info:ofi/enc:UTF-8&ctx_tim=2015-05-21T15%3A47%3A44IST&url_ver=Z39.88-2004&url_ctx_fmt=infofi/fmt:kev:mtx:ctx&rfr_id=info:sid/primo.exlibrisgroup.com:primo3-Journal-uai_aleph&rft_val_fmt=info:ofi/fmt:kev:mtx:book&rft.genre=&rft.atitle=&rft.jtitle=&rft.btitle=Estadistica%20aplicada%20a%20la%20administracion%20y%20a%20la%20economia.&rft.aulast=Hildebrand&rft.auinit=&rft.auinit1=&rft.auinitm=&rft.ausuffix=&rft.au=Hildebrand%2C%20David%20K&rft.aucorp=&rft.volume=&rft.issue=&rft.part=&rft.quarter=&rft.ssn=&rft.spage=&rft.epage=&rft.pages=&rft.artnum=&rft.issn=&rft.eissn=&rft.isbn=968444317X&rft.sici=&rft.coden=&rft_id=info:doi/&rft.object_id=&svc_val_fmt=info:ofi/fmt:kev:mtx:sch_svc&svc.fulltext=yes&rft_dat=<uai_aleph>000028113</uai_aleph><grp_id>43195231</grp_id><oa></oa>&rft.eisbn=&rft_id=info:oai/&req.language=]]></sear:openurlfulltext><sear:linktoholdings>OVP</sear:linktoholdings><sear:linktoprice>http://www.amazon.com/gp/product/968444317X</sear:linktoprice><sear:lln01>http://www.google.com/search?tbm=bks&amp;tbo=1&amp;hl=es&amp;q=isbn=968444317X</sear:lln01><sear:lln02>http://www.uai.cl/forms/biblioteca/bibliografia/</sear:lln02></sear:LINKS></sear:DOC><sear:DOC ID="1258497" RANK="0.35714287" NO="3" SEARCH_ENGINE="Local Search Engine" SEARCH_ENGINE_TYPE="Local Search Engine"><PrimoNMBib xmlns="http://www.exlibrisgroup.com/xsd/primo/primo_nm_bib">
<record>
<control>
<sourcerecordid>000035322</sourcerecordid> 
<sourceid>uai_aleph</sourceid> 
<recordid>uai_aleph000035322</recordid> 
<originalsourceid>UAI01</originalsourceid> 
<ilsapiid>UAI01000035322</ilsapiid> 
<sourceformat>MARC21</sourceformat> 
<sourcesystem>Aleph</sourcesystem> 
</control>
<display>
<type>book</type> 
<title>Matemáticas para administración, economía</title> 
<creator>Ernest F. Haeussler</creator> 
<contributor>Richard S Paul</contributor> 
<edition>10a edición..</edition> 
<publisher>México D.F., México : Pearson</publisher> 
<creationdate>2003</creationdate> 
<format>846 páginas : ilustraciones, gráficos y tablas..</format> 
<identifier>$$V9702603838</identifier> 
<subject>Matemáticas financieras; Ecuaciones lineales; Programación lineal; Matemáticas</subject> 
<language>spa</language> 
<source>uai_aleph</source> 
<availlibrary>$$IUAI$$LUAISAN$$2(650.01513 H137m10 )$$Savailable$$317$$41$$5N$$6108$$XUAI50$$YSAN$$ZRE</availlibrary> 
<availlibrary>$$IUAI$$LUAIVINA$$2(650.01513 H137m10 )$$Savailable$$312$$42$$5N$$610$$XUAI50$$YVINA$$ZRE</availlibrary> 
<unititle>Introductory mathematical analysis.</unititle> 
<lds01>MAT110 ; MAT116</lds01> 
<lds02>000035322</lds02> 
<lds04>Traducido de la 10 edición en inglés.</lds04> 
<lds04>Incluye índice.</lds04> 
<availinstitution>$$IUAI$$Savailable</availinstitution><availpnx>available</availpnx></display>
<links>
<openurl>$$Topenurl_journal</openurl> 
<backlink>$$Taleph_backlink$$Ebacklink</backlink> 
<thumbnail>$$Tgoogle_thumb</thumbnail> 
<openurlfulltext>$$Topenurlfull_journal</openurlfulltext> 
<linktoholdings>$$Taleph_holdings</linktoholdings> 
<linktoprice>$$Uhttp://www.amazon.com/gp/product/9702603838</linktoprice> 
<lln01>$$Uhttp://www.google.com/search?tbm=bks&amp;tbo=1&amp;hl=es&amp;q=isbn=9702603838</lln01> 
<lln02>$$Uhttp://www.uai.cl/forms/biblioteca/bibliografia/</lln02> 
</links>
<search>
<creatorcontrib>Ernest F.  Haeussler</creatorcontrib> 
<creatorcontrib>Haeussler, E</creatorcontrib> 
<creatorcontrib>[por] Ernest F. Haeussler, Richard S. Paul.</creatorcontrib> 
<creatorcontrib>Richard S.  Paul</creatorcontrib> 
<creatorcontrib>Paul, R</creatorcontrib> 
<title>Matemáticas para administración, economía /</title> 
<subject>Matemáticas financieras.</subject> 
<subject>Ecuaciones lineales.</subject> 
<subject>Programación lineal.</subject> 
<subject>Matemáticas.</subject> 
<subject>Aritmética comercial</subject> 
<subject>Finanzas Matemáticas</subject> 
<subject>Negocios Matemáticas</subject> 
<general>Pearson,</general> 
<sourceid>uai_aleph</sourceid> 
<recordid>uai_aleph000035322</recordid> 
<isbn>9702603838</isbn> 
<rsrctype>book</rsrctype> 
<creationdate>2003</creationdate> 
<searchscope>uai_aleph</searchscope> 
<searchscope>UAISAN</searchscope> 
<searchscope>UAIVINA</searchscope> 
<searchscope>UAI</searchscope> 
<scope>uai_aleph</scope> 
<scope>UAISAN</scope> 
<scope>UAIVINA</scope> 
<scope>UAI</scope> 
<alttitle>Introductory mathematical analysis.</alttitle> 
<lsr01>MAT110</lsr01> 
<lsr01>MAT116</lsr01> 
<lsr02>Pearson</lsr02> 
<lsr04>650.01513 H137m10</lsr04> 
<lsr03>mx</lsr03> 
<lsr09>Traducido de la 10 edición en inglés.</lsr09> 
<lsr09>Incluye índice.</lsr09> 
</search>
<sort>
<title>Matemáticas para administración, economía /</title> 
<creationdate>2003</creationdate> 
<author>Haeussler, Ernest F.</author> 
</sort>
<facets>
<language>spa</language> 
<creationdate>2003</creationdate> 
<topic>Matemáticas financieras</topic> 
<topic>Ecuaciones lineales</topic> 
<topic>Programación lineal</topic> 
<topic>Matemáticas</topic> 
<toplevel>available</toplevel> 
<prefilter>books</prefilter> 
<rsrctype>books</rsrctype> 
<creatorcontrib>Haeussler, E</creatorcontrib> 
<creatorcontrib>Paul, R</creatorcontrib> 
<library>UAISAN</library> 
<library>UAIVINA</library> 
<frbrgroupid>65567324</frbrgroupid><frbrtype>6</frbrtype></facets>
<dedup>
<t>1</t> 
<c2>UAI9702603838</c2> 
<c3>matematicasparaadminconomiaUAI</c3> 
<c4>2003</c4> 
<f3>9702603838</f3> 
<f5>matematicasparaadminoneconomia</f5> 
<f6>2003</f6> 
<f7>matematicas para administracion economia</f7> 
<f8>mx</f8> 
<f9>846 páginas :</f9> 
<f10>pearson</f10> 
<f11>haeussler ernest f</f11> 
</dedup>
<frbr>
<t>1</t> 
<k1>$$Kuaihaeussler ernest f$$AA</k1> 
<k3>$$Kuaiintroductory mathematical analysis$$AT</k3> 
<k3>$$Kuaimatematicas para administracion economia$$AT</k3> 
</frbr>
<delivery>
<institution>UAI</institution> 
<delcategory>Physical Item</delcategory> 
</delivery>
<ranking>
<booster1>1</booster1> 
<booster2>1</booster2> 
</ranking>
<addata>
<aulast>Haeussler</aulast> 
<aufirst>Ernest F.</aufirst> 
<au>Haeussler, Ernest F</au> 
<addau>Paul, Richard S</addau> 
<btitle>Matemáticas para administración, economía</btitle> 
<date>2003</date> 
<risdate>2003.</risdate> 
<isbn>9702603838</isbn> 
<format>book</format> 
<ristype>BOOK</ristype> 
<notes>Incluye notas y referencias bibliográficas.</notes> 
<cop>México D.F., México</cop> 
<pub>Pearson</pub> 
</addata>
<browse>
<callnumber>$$IUAI$$D650.01513 H137m10$$E650.015130000 h137m10$$T1</callnumber> 
</browse>
</record></PrimoNMBib><sear:GETIT deliveryCategory="Physical Item" GetIt1="OVP" GetIt2="http://200.38.75.91:3410/sfxuai41?ctx_ver=Z39.88-2004&amp;ctx_enc=info:ofi/enc:UTF-8&amp;ctx_tim=2015-05-21T15%3A47%3A45IST&amp;url_ver=Z39.88-2004&amp;url_ctx_fmt=infofi/fmt:kev:mtx:ctx&amp;rfr_id=info:sid/primo.exlibrisgroup.com:primo3-Journal-uai_aleph&amp;rft_val_fmt=info:ofi/fmt:kev:mtx:book&amp;rft.genre=&amp;rft.atitle=&amp;rft.jtitle=&amp;rft.btitle=Matemáticas%20para%20administración%2C%20economía&amp;rft.aulast=Haeussler&amp;rft.auinit=&amp;rft.auinit1=&amp;rft.auinitm=&amp;rft.ausuffix=&amp;rft.au=Haeussler%2C%20Ernest%20F&amp;rft.aucorp=&amp;rft.volume=&amp;rft.issue=&amp;rft.part=&amp;rft.quarter=&amp;rft.ssn=&amp;rft.spage=&amp;rft.epage=&amp;rft.pages=&amp;rft.artnum=&amp;rft.issn=&amp;rft.eissn=&amp;rft.isbn=9702603838&amp;rft.sici=&amp;rft.coden=&amp;rft_id=info:doi/&amp;rft.object_id=&amp;rft_dat=&lt;uai_aleph>000035322&lt;/uai_aleph>&lt;grp_id>65567324&lt;/grp_id>&lt;oa>&lt;/oa>&amp;rft.eisbn=&amp;rft_id=info:oai/&amp;req.language="/><sear:LIBRARIES><sear:LIBRARY><sear:institution>UAI</sear:institution><sear:library>UAISAN</sear:library><sear:status>available</sear:status><sear:collection/><sear:callNumber>(650.01513 H137m10 )</sear:callNumber><sear:url>OVP</sear:url></sear:LIBRARY><sear:LIBRARY><sear:institution>UAI</sear:institution><sear:library>UAIVINA</sear:library><sear:status>available</sear:status><sear:collection/><sear:callNumber>(650.01513 H137m10 )</sear:callNumber><sear:url>OVP</sear:url></sear:LIBRARY></sear:LIBRARIES><sear:LINKS><sear:openurl><![CDATA[http://200.38.75.91:3410/sfxuai41?ctx_ver=Z39.88-2004&ctx_enc=info:ofi/enc:UTF-8&ctx_tim=2015-05-21T15%3A47%3A45IST&url_ver=Z39.88-2004&url_ctx_fmt=infofi/fmt:kev:mtx:ctx&rfr_id=info:sid/primo.exlibrisgroup.com:primo3-Journal-uai_aleph&rft_val_fmt=info:ofi/fmt:kev:mtx:book&rft.genre=&rft.atitle=&rft.jtitle=&rft.btitle=Matemáticas%20para%20administración%2C%20economía&rft.aulast=Haeussler&rft.auinit=&rft.auinit1=&rft.auinitm=&rft.ausuffix=&rft.au=Haeussler%2C%20Ernest%20F&rft.aucorp=&rft.volume=&rft.issue=&rft.part=&rft.quarter=&rft.ssn=&rft.spage=&rft.epage=&rft.pages=&rft.artnum=&rft.issn=&rft.eissn=&rft.isbn=9702603838&rft.sici=&rft.coden=&rft_id=info:doi/&rft.object_id=&rft_dat=<uai_aleph>000035322</uai_aleph><grp_id>65567324</grp_id><oa></oa>&rft.eisbn=&rft_id=info:oai/&req.language=]]></sear:openurl><sear:backlink>http://aleph.uai.cl/F?func=direct&amp;local_base=UAI01&amp;doc_number=000035322</sear:backlink><sear:thumbnail>http://books.google.com/books?bibkeys=ISBN:9702603838,OCLC:,LCCN:&amp;jscmd=viewapi&amp;callback=updateGBSCover</sear:thumbnail><sear:openurlfulltext><![CDATA[http://200.38.75.91:3410/sfxuai41?ctx_ver=Z39.88-2004&ctx_enc=info:ofi/enc:UTF-8&ctx_tim=2015-05-21T15%3A47%3A45IST&url_ver=Z39.88-2004&url_ctx_fmt=infofi/fmt:kev:mtx:ctx&rfr_id=info:sid/primo.exlibrisgroup.com:primo3-Journal-uai_aleph&rft_val_fmt=info:ofi/fmt:kev:mtx:book&rft.genre=&rft.atitle=&rft.jtitle=&rft.btitle=Matemáticas%20para%20administración%2C%20economía&rft.aulast=Haeussler&rft.auinit=&rft.auinit1=&rft.auinitm=&rft.ausuffix=&rft.au=Haeussler%2C%20Ernest%20F&rft.aucorp=&rft.volume=&rft.issue=&rft.part=&rft.quarter=&rft.ssn=&rft.spage=&rft.epage=&rft.pages=&rft.artnum=&rft.issn=&rft.eissn=&rft.isbn=9702603838&rft.sici=&rft.coden=&rft_id=info:doi/&rft.object_id=&svc_val_fmt=info:ofi/fmt:kev:mtx:sch_svc&svc.fulltext=yes&rft_dat=<uai_aleph>000035322</uai_aleph><grp_id>65567324</grp_id><oa></oa>&rft.eisbn=&rft_id=info:oai/&req.language=]]></sear:openurlfulltext><sear:linktoholdings>OVP</sear:linktoholdings><sear:linktoprice>http://www.amazon.com/gp/product/9702603838</sear:linktoprice><sear:lln01>http://www.google.com/search?tbm=bks&amp;tbo=1&amp;hl=es&amp;q=isbn=9702603838</sear:lln01><sear:lln02>http://www.uai.cl/forms/biblioteca/bibliografia/</sear:lln02></sear:LINKS></sear:DOC></sear:DOCSET></sear:RESULT><sear:searchToken>0</sear:searchToken></sear:JAGROOT></sear:SEGMENTS>';
    
    // Using regular expression from admin to extract course code from shortname    
    if (! isset($CFG->emarking_parallelregex)) {
        return false;
    }
    
    // Get all different course codes in the database
    $coursecodes = $DB->get_records_sql("SELECT DISTINCT shortname FROM {course}");
    
    $parsedcodes = array();
    
    foreach ($coursecodes as $coursecode) {
        // The shortname is parsed to identify the course code
        list ($academicperiod, $campus, $code, $section, $term, $year) = 
            emarking_parse_shortname($coursecode);

        if(!$code || isset($parsedcodes[$code])) {
            continue;
        }
        
        // The url of the web service
        $url = $CFG->local_bibliography_primourl_pre . strtolower($coursecode) . $CFG->local_bibliography_primourl_post;
        
        $total = 0;
        
        try {
            
            // In case we don't have the content cached and the server has problems, we set a timeout
            
            set_time_limit(2);
            
            // Getting the XML from the bibliography server
            
/*            if (! file_exists($url)) {
                throw new Exception("Could not connecto to server");
            }
            
            $handle = @fopen($url, "r") or die("could not open file");
            
            if (! $handle)
                throw new Exception("Fatal error trying to retrieve data");

            $xml = stream_get_contents($handle);
*/            
            $xml = $testxml;
            
            $xml = str_replace("sear:", "", $xml); // Solve the problem with the Prefix in the tag
            
            $element = new SimpleXMLElement($xml);
            
            foreach ($element->JAGROOT->RESULT->DOCSET->DOC as $item) {
                $total ++;
                
                $bookid = $item->PrimoNMBib->record->control->recordid;
                $booktitle = $item->PrimoNMBib->record->display->title;
                $bookurl = "http://primo.gsl.com.mx:1701/primo_library/libweb/action/display.do?fn=display&doc='$bookid";
                
                $book = new stdClass();
                $book->coursecode = $coursecode;
                $book->booktitle = $booktitle;
                $book->primourl = $bookurl;
                $book->timecreated = time();
                
                if($book->id = $DB->insert_record('local_bibliography_books', $book)) {
                    $parsedcodes[$coursecode] = $book;
                }
            }
        } catch (Exception $e) {
        }
    }
}