@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/about.css">
        <title>About</title>
        @vite('resources/views/css/app.css')
    </head>
    <body>
        <div class="content">
            <div class="header">
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <h3 class="aboutcardheader">About us</h3>
                    </div>
                    <div class="aboutcardcontent">
                        <p class="aboutcardtxt">Annales Mathematicae et Informaticae is an international journal of the Institute of Mathematics and Informatics of Eszterházy Károly University (Eger, Hungary), published by Líceum University Press.</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <h3 class="aboutcardheader">Aims and Scope</h3>
                    </div>
                    <div class="aboutcardcontent">
                        <p class="aboutcardtxt">This journal is open for scientific publications in mathematics and computer science, where the field of number theory, group theory, constructive and computer aided geometry as well as theoretical and practical aspects of programming languages receive particular emphasis. Methodological papers are also welcome. Papers submitted to the journal should be written in English. The Editorial Board can accept only new and unpublished material.</p>
                    </div>
                </div>
                <div  class="contactcard">
                    <div class="contactcardtitle">
                        <h5 class="aboutcardheader">Contact</h5>
                    </div>
                    <div class="contactcardcontent">
                        <p class="aboutcardtxtc">Eszterházy Károly University</p>
                        <p class="aboutcardtxtc">Institute of Mathematics and Informatics</p>
                        <p class="aboutcardtxtc">H-3300 Eger, Leányka u. 4</p>
                        <p class="aboutcardtxtc">Hungary</p>
                        <p class="aboutcardtxtc">Tel/Fax: +36-36-520478</p>
                        <div class="contactcardhref">
                            <a  href="https://mailhide.io/e/zoXKu">E-mail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="primaryeditors">
                <table>
                    <td>
                        <div class="editor">
                            <img  src="{{ asset('img/primary-editors/mh.jpg') }}">
                            <a class="name" href="https://hoffmannmiklos.uni-eszterhazy.hu/en">Miklós Hoffmann</a>
                            <h5 class="post">(Editor-in-Chief)</h5>
                        </div>
                    </td>
                    <td>
                        <div class="editor">
                            <img  src="{{ asset('img/primary-editors/tj.jpg') }}">
                            <a class="name" href="http://juhasztibor.uni-eger.hu/">Tibor Juhász</a>
                            <h5 class="post">(Managing Editor)</h5>
                        </div>
                    </td>
                    <td>
                        <div class="editor">
                            <img  src="{{ asset('img/primary-editors/gk.png') }}">
                            <a class="name" href="https://sites.google.com/site/gkovasz/">Gergely Kovásznai</a>
                            <h5 class="post">(Managing Editor)</h5>
                        </div>
                    </td>
                    <td>
                        <div class="editor">
                            <img  src="{{ asset('img/primary-editors/tt.png') }}">
                            <a class="name" href="https://tomacstibor.uni-eszterhazy.hu/">Tibor Tómács</a>
                            <h5 class="post">(Technical Editor)</h5>
                        </div>
                    </td>
                </table>
            </div>
            <div class="other-editors">
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="https://inf.unideb.hu/hu/node/1025">Sándor Bácsó</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Institute of Mathematics and Informatics, University of Debrecen, Debrecen, Hungary</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="http://www.grad.hr/sgorjanc/">Sonja Gorjanc</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Department of Mathematics, University of Zagreb, Zagreb, Croatia</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="http://www.inf.u-szeged.hu/~gyimi/">Tibor Gyimóthy</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Department of Software Engineering, University of Szeged, Szeged, Hungary</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="https://ami.uni-eszterhazy.hu/editors.php">József Holovács</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Institute of Mathematics and Informatics, Eszterházy Károly University, Eger, Hungary</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="http://users.iit.uni-miskolc.hu/~kovacs/">László Kovács</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Department of Informatics, University of Miskolc, Miskolc, Hungary</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="http://people.inf.elte.hu/kozma/eng/index_eng.html">László Kozma</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Department of Software Technology and Methodology, Eötvös Loránd University, Budapest, Hungary</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a class="borderfade" href="http://liptai.ektf.hu/">Kálmán Liptai</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Institute of Mathematics and Informatics, Eszterházy Károly University, Eger, Hungary</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="http://www.matmor.unam.mx/index.php?option=com_content&task=view&id=52&Itemid=62">Florian Luca</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Instituto de Matemáticas, Universidad Nacional Autonoma de México, Michoacán, Mexico</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="http://oldwww.unibas.it/utenti/mastroianni/index.html">Giuseppe Mastroianni</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Department of Mathematics and Computer Sciences, University of Basilicata, Potenza, Italy</p>
                    </div>
                </div>
                <div class="aboutcard">
                        <div class="aboutcardtitle">
                            <a href="http://aries.ektf.hu/~matyas">Ferenc Mátyás</a>
                        </div>
                        <div class="aboutcardcontent">
                            <p>Institute of Mathematics and Informatics, Eszterházy Károly University, Eger, Hungary</p>
                        </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="http://math.unideb.hu/pinter-akos/">Ákos Pintér</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Institute of Mathematics, University of Debrecen, Debrecen, Hungary</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="http://www.uni-miskolc.hu/~matronto/go/main.php">Miklós Rontó</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Department of Analysis, University of Miskolc, Miskolc, Hungary</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="http://matematika.emk.uni-sopron.hu/dr-szalay-laszlo">László Szalay</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Institute of Mathematics, University of Sopron, Sopron, Hungary</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="http://irh.inf.unideb.hu/user/jsztrik/">János Sztrik</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Department of Informatics Systems and Networks, University of Debrecen, Debrecen, Hungary</p>
                    </div>
                </div>
                <div class="aboutcard">
                    <div class="aboutcardtitle">
                        <a href="https://science.uottawa.ca/mathstat/en/people/walsh-gary-0">Gary Walsh</a>
                    </div>
                    <div class="aboutcardcontent">
                        <p>Department of Mathematics and Statistics, University of Ottawa, Ottawa, Ontario, Canada</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection