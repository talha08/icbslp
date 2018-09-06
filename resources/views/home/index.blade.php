<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conference</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('flipclock/flipclock.css') }}">
    <style>
        .flip-clock-wrapper {
            padding-left: 25%;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#site-nav">
<nav id="site-nav" class="navbar navbar-fixed-top  navbar-custom">  <!--navbar-fixed-top-->
    <div class="container">
        <div class="navbar-header">
            <!-- logo -->
            <div class="site-branding">
                <a class="logo" href="{{ url('/') }}">
                    <!-- logo image  -->
                    <img  src="{{ asset('assets/images/logo.png') }}"  alt="Logo"  width="70"  height="50">
                </a>
            </div>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-items" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- /.navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-items">
            <ul class="nav navbar-nav navbar-right">

                <!-- navigation menu -->
                {{--<li class="active"><a data-scroll href="#welcome-note"><font size="2"><b>Welcome Note</b></font></a></li>--}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <font size="2"><b>Call For</b></font></a>
                    <ul class="dropdown-menu">
                        <li><a href="#callforpaper"><b>Papers</b></a></li>
                        <li><a href="#callforposter"><b>Posters</b></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <font size="2"><b>Submission</b></font></a>
                    <ul class="dropdown-menu">
                        <li><a href="#submission"><b>Paper Submission</b></a></li>
                        <li><a href="#posterguideline"><b>Poster Submission</b></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <font size="2"><b>Special Sessions</b></font></a>
                    <ul class="dropdown-menu">
                        <li><a href="#bangla-digit-recognition"><b>Bangla Digit Recognition</b></a></li>
                        <li><a href="#bangla-language-and-grammar-for-nlp-researcher"><b>
                             Bangla Language and Grammar for NLP researcher</b></a>
                        </li>
                    </ul>
                </li>

                <li class="active"><a data-scroll href="#keynote-speakers"><font size="2"><b>Keynote Speakers</b></font></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <font size="2"><b>Registration</b></font></a>
                    <ul class="dropdown-menu">
                        <li><a href="#registration"><b>Registration Info.</b></a></li>
                        <li><a href="{{ route('authorRegistration') }}"><b>Author  Registration</b></a></li>
                        <li><a href="{{ route('participantRegistration') }}"><b>Participant  Registration</b></a></li>
                    </ul>
                </li>


                <li><a data-scroll href="#dates"><font size="2"><b>Important Dates</b></font></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <font size="2"><b>Committees</b></font></a>
                    <ul class="dropdown-menu">
                        <li><a href="#committees"><b>Conference Committees</b></a></li>
                        <li><a href="#advcommittee"><b>Conference  Advisory  Committee</b></a></li>
                        <li><a href="#techcommittee"><b>Technical  Programme  Committee</b></a></li>
                        <li><a href="#orgcommittee"><b>Organizing  Committee</b></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <font size="2"><b>Location</b></font></a>
                    <ul class="dropdown-menu">
                        <li><a href="#venue"><b>Venue</b></a></li>
                        <li><a href="#travel"><b>Travel</b></a></li>
                        <li><a href="#accomodation"><b>Accomodation</b></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container -->
</nav>

<header id="site-header" class="site-header valign-center">
    <div class="intro">
        <div class="card">
            <div class="card-header">
                <h3 style="color:yellow">Registration Ends On</h3><br>
            </div>
            <div class="card-body">
                <div class="clock" style="text-align:center;"></div>
            </div>
        </div><br>

        <h2>21-22 September, 2018 </h2>
        <h1>International Conference on Bangla Speech and Language Processing</h1>
        <p>Dr.  M  A  Wazed  Miah  IICT  Building, Shahjalal University of Science and Technology</p>
        <p>Sylhet, Bangladesh</p>
        </br>
        </br>
        <div class="row">
            <div class="col-md-4 col-sm-8">
                <img src="{{asset('assets/images/sust_logo.png')}}" alt="SUST">
            </div>
            <div class="col-md-4 col-sm-8">
                </br>
                <img src="{{asset('assets/images/ieee_logo.png')}}" alt="IEEE">
            </div>
            <div class="col-md-4 col-sm-8">
                <img src="{{ asset('assets/images/heqep_logo.png') }}" alt="HEQEP">
            </div>
        </div>
    </div>
</header>


<section id="welcome-note" class="section welcome-note">
    <div class="container">
        <h3 class="section-title">Welcome Note</h3>
        <div class="row">
            <div class="col-sm-6">
                <p>
                    It’s a great pleasure to welcome everyone to the International Conference on Bangla
                    Speech and Language Processing (ICBSLP) to be held on 21-22 September 2018, at Shahjalal
                    University of Science and Technology (SUST), Sylhet, Bangladesh. Most conferences in
                    Bangladesh are arranged in the capital city of Dhaka and participants often miss the natural
                    beauty and tranquility of lush green riverine Bangladesh. The ICBSLP gives the participants an
                    opportunity to attend a conference in Sylhet, a north eastern city in picturesque Surma Valley
                    with scenic tea plantations, Haors and tropical forests. SUST, the hosting institution, is the first
                    science and technology university of the country. It is comparatively new but has already
                    established itself as a leading science and technology university of the country with the most IT
                    enabled environment.
                </p>
            </div>
            <div class="col-sm-6">
                <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/WGeE7KTaXGw?rel=0" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            </div>
        </div>

        <p>
            Out of every 100 people of the world, roughly 3 speak Bangla, which makes it the seventh
            most spoken native language in the world. In 1952, theBangla language movement of this
            country successfully achieved the language's official status as the state language. In recognition
            of this movement, UNESCO started celebrating 21 February as the International Mother
            Language Day since 1999. Bangla language is the most important element of our culture,
            history and heritage, which binds together roughly more than 200 million diverse people living
            in Bangladesh, India and the rest of the world.
        </p>
        <p>
            As a part of the scientific and research community we feel it is also our responsibility to
            enhance the computer adaptability of the Bangla language through research, development and
            innovation. This conference plans to bring together leading national and international
            academicians, researchers and scholars to exchange and share their experiences and research
            results about all the aspects of Bangla Speech and Language Processing, and to discuss
            challenges and their solutions. We welcome researchers to submit their original and
            unpublished research findings to this conference. Although our focus is in Bangla, we welcome
            relevant research results of other‎ families of languages in this region.
        </p>
        <p>
            We believe the timing of this conference has special significance as well. The Bangladesh
            government has just launched a multimillion dollar ambitious project for the Enhancement of
            Bangla Language in ICT through Research and Development (EBLICT). The success of this project
            will largely depend on the research community and industry working together. By bringing
            together national and international scholars, ICBSLP 2018 will provide a common platform for
            these two entities to share ideas, build networks and work together for the success of this
            project.
        </p>
        <p>
            As the conference chair of ICBSLP 2018, I am looking forward to welcoming you all to the
            SUST campus in September 2018.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <p> Professor  Dr.  Muhammed  Zafar  Iqbal</br>Chair, ICBSLP2018</p>
            </div>
            <div class="col-md-3 col-sm-6">

            </div>
            <div class="col-md-3 col-sm-6">
            </div>
            <div class="col-md-3 col-sm-6">
            </div>
        </div>
    </div>
    </div>
</section>

<section id="callforpaper" class="section callforpaper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3 class="section-title">Call For Papers</h3>
                <p>1st International Conference on Bangla Speech and Language Processing (ICBSLP 2018) will be held at Sylhet, Bangladesh during
                    September 21-22, 2018, which is organized by the Department of Computer Science and Engineering (CSE) of Shahjalal University of
                    Science and Technology (SUST). ICBSLP 2018, a premiere in its kind, welcomes the submission of original unpublished works in various
                    fields of Bangla speech and language processing. This conference is aimed at providing a platform for all researchers and academicians
                    to share ideas, highly developed skills and successful practices in Bangla Computing. ICBSLP 2018 is cosponsored by IEEE Bangladesh
                    Section and the proceedings will be published in IEEE Xplore and in the form of flash memory. We look forward to receiving your
                    submissions and your participation in ICBSLP 2018.</p>

                <p>Original  papers  are  solicited  in,  but  not  limited  to,  the  following  areas:
                <h4>Natural Language Processing</h4>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <ul>
                            <li>Sentiment Analysis</li>
                            <li>Machine Translation</li>
                            <li>Corpus</li>
                            <li>Language Model</li>
                            <li>Stylometry</li>
                            <li>POS Tagger</li>
                            <li>Spell Checker</li>
                            <li>Grammar Checker</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <ul>
                            <li>Dialog Management</li>
                            <li>Question Answering</li>
                            <li>Named Entity Recognition</li>
                            <li>Query Expansion</li>
                            <li>Lexical Semantics</li>
                            <li>Paraphrasing</li>
                            <li>Chunking / Shallow Parsing</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <ul>
                            <li>Transliteration</li>
                            <li>Anaphora Resolution</li>
                            <li>Semantic Processing</li>
                            <li>Document Categorization</li>
                            <li>Document Clustering</li>
                            <li>Stemmer</li>
                            <li>Text Summarization</li>
                        </ul>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h4>Speech Processing</h4>
                        <ul>
                            <li>Text to Speech</li>
                            <li>Speech to Text</li>
                            <li>Speech Prosody and Labeling</li>
                            <li>Speaker and Language Detection</li>
                            <li>Phonetic/Phonological System</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h4>Human Computer Interaction</h4>
                        <ul>
                            <li>Software for Disabled People</li>
                            <li>Multimodal HCI</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h4>Image Processing &amp; Computer Vision</h4>
                        <ul>
                            <li>OCR - Handwriting</li>
                            <li>OCR - Printed Document</li>
                            <li>Sign Language Detection</li>
                        </ul>
                    </div>
                </div>

                </p>
                <p>PDF version of this call can be found <a href="https://drive.google.com/file/d/1v6qF268niBtMPM_BvkP6XDTPe5oj73zS/view?usp=sharing"><font color="red">here</font></a>.</p>

            </div>
        </div>
    </div>
    <section id="callforposter" class="section callforposter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h3 class="section-title">Call For Posters</h3>
                    <p>
                        The program committee of ICBSLP2018 cordially invites undergraduate and graduate students to participate in a Students’
                        Poster Session and to showcase their current research, ongoing projects and similar items related to the conference theme and
                        scope.
                    </p>
                    <h4>Competition</h4>
                    <p>
                        Three submissions will be shortlisted in advance based on reviews. During the conference, a panel will decide the winners,
                        who will receive an award certificate along with prize money. The best candidates will also have the opportunity to present
                        their poster or demonstration at the final session on Day 2 of the conference. The format for presentations will be announced
                        ahead of the event but duration for each presentation should not be more than 10 minutes.
                    </p>
                    <p>
                        Each submission will be assessed on the following equally-weighted criteria:
                    <ul>
                        <li>The Clarity in the research problem</li>
                        <li>The Quality of writing</li>
                        <li> The novelty of the research</li>
                    </ul>
                    Please submit/send your poster to the following e-mail addresses as an attachment (in .pdf format):
                    <a href="mailto:icbslp2018@sust.edu"><font color="red">icbslp2018@sust.edu</font></a> .
                    The subject of the e-mail has to be “Student poster submission for ICBSLP2018”. File size of the poster draft must not exceed 10 MB.

                    </p>
                </div>
            </div>
        </div>

    </section>
</section>

<section id="submission" class="section submission">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3 class="section-title">Submission</h3>
                <p style="font-size:20px"><b>Paper  Submission  Guidelines </b></p>
                <p>
                    <ul>
                        <li style="font-size:19px"><b>Submission  Deadline: </b> </li>

                <p>All  paper  to  ICBSLP 2018  must  be  submitted  through  online  conference  management  system  <a href="https://easychair.org/conferences/?conf=bslp18"><font color="red"><em>EasyChair</em></font></a>  within
                    the  announced  deadline  and  in  pdf  formats. </p>

                <p>The  Initial  Paper  Submission  deadline is August 12, 2018.</p>

                <li style="font-size:19px"><b>Preparation  of  Manuscript:</b></li>
                <ul>
                    <li style="font-size:17px"><b>Abstract:</b></li>  <p>The  maximum  of  200-word  abstract  should  be  a  brief  summary  of  the  work,
                        which  will  be  included  in  the  Conference  Proceedings  if  the  paper  is  accepted.</p>

                    <li style="font-size:17px"><b>Summary:</b></li> <p> The  Maximum  6-page  two-column  IEEE  style  Summary  includes  all  the  text,  abstract,
                        title,  authors,  equations,  tables,  photographs,  drawings,  figures,  and  references.  In  exceptional  circumstances,
                        authors  must  contact  with  organizing  chair  (<a href="mailto:secretary@icbslp.org"><font color="red">secretary@icbslp.org</font></a>  or <a href="mailto:icbslp2018@sust.edu"><font color="red">icbslp2018@sust.edu</font></a>)  and  extra  charge  will
                        be  applied  for  each  page.</p>

                    <li style="font-size:17px"><b>Double-Blind  Paper:</b></li><p>The  authors  should  not  include  their  names,  affiliations,  postal  addresses,  and
                        email  addresses  in  the  initial  manuscript.</p>

                    <li style="font-size:17px"><b>Manuscript  Template:</b></li>  <p>Submissions  must  follow  standard  <a href="https://www.ieee.org/conferences/publishing/templates.html"><font color="red"><em>IEEE  conference  templates</em></font></a>.  The  manuscript
                        template  also  available  in  the  following  links:
                    <ul>
                        <li style="font-size:12px"><b><a href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/conferences/Conference-template-A4.doc"><font color="red">MS WORD(A4)</font></a></b></li>
                        <li style="font-size:12px"><b><a href="https://www.ieee.org/content/dam/ieee-org/conferences/Conference-LaTeX-template_5-8-18.zip"><font color="red">LaTeX</font></a></b></li>
                    </ul>
                    </p>
                </ul>

                <li style="font-size:19px"><b>Plagiarism &amp; Multiple Submission Policy:   </b> </li>
                <ul>
                    <li style="font-size:17px"><b>Plagiarism:</b></li>  <p>All  conference  papers  submitted  to  ICBSLP  2018  for  publication  must  record  original  work  which
                        has  not  been  published  previously.  Any  alleged  cases  of  plagiarism  will  be  dealt  with  according  to  the  ICBSLP
                        and  IEEE  Policy  in  relation  to  Plagiarism,  Infringement  of  Copyright  and  Infringement  of  Moral  Rights  and
                        Submission  to  Multiple  Publications  outlets.
                    </p>
                    <p>The  IEEE  policy  on  Plagiarism  is  available  at <a href="https://www.ieee.org/publications/rights/plagiarism/plagiarism.html"><font color="red"><em>IEEE Policy on Plagiarism</em></font></a>.</p>

                    <li style="font-size:17px"><b>Multiple  submissions:</b></li> <p> ICBSLP  and  IEEE  do  not  permit  manuscripts  included  in  its  conference  proceedings
                        to  be  simultaneously  under  review  for  another  conference,  journal,  or  other  forms  of  publication.
                        Once  a  case  of  multiple  submissions  has  been  established,  the  paper(s)  in  question  will  be  immediately
                        declined  for  publication  by  the  ICBSLP  and  IEEE  followed  by  appropriate  disciplinary  action.  </p>

                    <p>The  IEEE  policy  on  Multiple  submissions  is  available  at  <a href="https://www.ieee.org/publications/rights/multi-sub-guidelines-intro.html"><font color="red"><em>IEEE  Policy  on  Multiple  Submission</em></font></a></p>

                </ul>

                <li style="font-size:19px"><b>Copyright: </b> </li>
                <p>ICBSLP  2018  is  technically  co-sponsored  by  IEEE  Bangladesh  section.  Accepted  and  presented  papers
                    will be  published  on  IEEE  Xplore®  (IEEE  Digital  Library)  and  IEEE  will  own  the  copyright  to  the  conference
                    publication.  IEEE  copyright  form  will  be  filled  out  for  each  paper  separately  (One  copyright  form  is  required
                    for  one  paper).</p>
                <p> Download  Copyright  form:  <a href="https://www.ieee.org/publications_standards/publications/authors/53583_IEEECopyrightForm.pdf"><font color="red"><em>IEEE  Copyright  form</em></font></a>  </p>


                </ul>

                </ul>

                <p style="font-size:20px"><b>Important  IEEE  Policy  Announcement  </b></p>
                <p>
                    <ul>
                        <li style="font-size:19px"><b>Plagiarism &amp; Multiple Submission Policy:  </b> </li>
                        <ul>
                            <li style="font-size:17px"><b>Plagiarism:</b></li> <p> All  conference  papers  submitted  to  ICBSLP  2018  for  publication  must  record  original  work  which
                    has  not  been  published  previously.  Any  alleged  cases  of  plagiarism  will  be  dealt  with  according  to  the  ICBSLP
                    and  IEEE  Policy  in  relation  to  Plagiarism,  Infringement  of  Copyright  and  Infringement  of  Moral  Rights  and
                    Submission  to  Multiple  Publications  outlets.
                </p>
                <p>The  IEEE  policy  on  Plagiarism  is  available  at <a href="https://www.ieee.org/publications/rights/plagiarism/plagiarism.html"><font color="red"><em>IEEE Policy on Plagiarism</em></font></a>.</p>

                <li style="font-size:17px"><b>Multiple  submissions:</b></li>  <p>ICBSLP  and  IEEE  do  not  permit  manuscripts  included  in  its  conference  proceedings
                    to  be  simultaneously  under  review  for  another  conference,  journal,  or  other  forms  of  publication.
                    Once  a  case  of  multiple  submissions  has  been  established,  the  paper(s)  in  question  will  be  immediately
                    declined  for  publication  by  the  ICBSLP  and  IEEE  followed  by  appropriate  disciplinary  action.  </p>

                <p>The  IEEE  policy  on  Multiple  submissions  is  available  at  <a href="https://www.ieee.org/publications/rights/multi-sub-guidelines-intro.html"><font color="red"><em>IEEE  Policy  on  Multiple  Submission</em></font></a></p>

                </ul>

                </ul>
                </p>
            </div>
        </div>
    </div>

    <section id="posterguideline" class="posterguideline">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="font-size:20px"><b>Poster  Submission  Guidelines </b></p>
                    <p>
                    <ul>
                        <li>Posters must be A1 landscape/Portrait (594 x 841 mm)</li>
                        <li>
                            Posters must include
                            <ul>
                                <li>Author name</li>
                                <li>University name</li>
                                <li>Logo</li>
                            </ul>
                        <li>Poster details must be submitted during the registration process</li>
                        <li>Information in your poster could include:
                            <ul>
                                <li>The challenge being addressed or question being answered by the research in such a way that a non-expert can understand the importance of the research</li>
                                <li>The focus of the research</li>
                                <li>The intended outcome of the research</li>
                                <li>The current stage of the research</li>
                                <li>Any research results, preliminary conclusions, or potentially interesting next steps</li>
                            </ul>
                        </li>
                        <li>Posters should be aimed at other students and researchers who do not necessarily have expertise in that specific area of research</li>
                        <li>For any queries, contact to <a href="mailto:icbslp2018@sust.edu"><font color="red">icbslp2018@sust.edu</font></a></li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
</section>

<section id="specialsessions" class="section specialsessions">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Special Sessions</h3>
            </div>
        </div>
    </div>

    <section id="bangla-digit-recognition" class="bangla-digit-recognition">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="font-size:20px"><b>Bangla Digit Recognition<br><font-size=18px>Session Chair: Fuad Rahman, PhD, Apurba Technologies</font-size></b></p>

                    <p>
                        This session will showcase some of the most innovative submissions in the highly successful
                        recent competition (<a href="https://www.kaggle.com/c/numta"><font color="red">https://www.kaggle.com/c/numta</font></a>) on Bengali Digit Recognition
                        organized by Bengali.AI and exclusively sponsored by Apurba Technologies. Natural language processing (NLP)
                        research is developing rapidly due to the rise of artificial intelligence (AI). One of the key topics of NLP is
                        optical character recognition (OCR). To build an OCR in Bengali language, digit classification provides a convenient starting
                        point. In this competition, the goal was to correctly identify digits from NumtaDB, a large dataset (85,000+) of
                        Bengali digits.
                    </p>
                    <p>
                        Any team who participated in the competition can submit papers and posters by August 12 through online conference management
                        system EasyChair within the announced deadline and in pdf formats. Please check the <font color="red">Bangla Digit Recognition</font> topic under
                        <font color="red">Special Sessions</font> during Easychair submission.
                    </p>
                    <p>
                        Detail guidelines can be found in Paper submission section.
                    </p>
                    <p>
                        Please submit/send your poster to the following e-mail addresses as an attachment (in .pdf format):
                        <a href="icbslp2018@sust.edu"><font color="red">icbslp2018@sust.edu</font></a> .
                        The subject of the e-mail has to be “Special session poster submission for ICBSLP 2018”. File size of the poster draft must
                        not exceed 10 MB.
                    </p>
                    <p>
                        Detail guidelines can be found in Poster submission section.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="bangla-language-and-grammar-for-nlp-researcher" class="bangla-language-and-grammar-for-nlp-researcher">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="font-size:20px"><b>Bangla Language and Grammar for NLP Researcher</b></p>
                    <p>TBA</p>
                </div>
            </div>
        </div>
    </section>
</section>

<section id="keynote-speakers" class="section keynote-speakers">
    <div class="container">
        <h3 class="section-title">Keynote Speakers</h3>
        <div class="row">
            <div class="col-sm-4">
                <img alt="" class="img-responsive center-block" src="{{ asset('assets/images/speakers/0.jpg') }}">
                <h4><center><a href="#Prof-Girish-Nath-Jha"><b>Prof. Girish Nath Jha</b></a></center></h4>
            </div>
            <div class="col-sm-4">
                <img alt="" class="img-responsive center-block" src="{{ asset('assets/images/speakers/1.jpg') }}">
                <h4><center><a href="#Dr-Niladri-Sekhar-Dash"><b>Dr. Niladri Sekhar Dash</b></a></center></h4>
            </div>
            <div class="col-sm-4">
                <img alt="" class="img-responsive center-block" src="{{ asset('assets/images/speakers/Dr_Firoj_Alam.jpg') }}">
                <h4><center><a href="#Dr-Firoj-Alam"><b>Dr. Firoj Alam</b></a></center></h4>
            </div>
        </div>
    </div>

    <section id="Prof-Girish-Nath-Jha" class="section Prof-Girish-Nath-Jha">
        <div class="container">
            <h4>Prof. Girish Nath Jha</h4>

            <p>
                ICBSLP 2018 is honored to have Professor Girish Nath Jha as a keynote speaker. He will speak on
                "MT Resource Crunch - challenges and opportunities for South Asian languages"
            </p>

            <p>
                Prof. Girish Nath Jha teaches Computational Linguistics at the School of Sanskrit and Indic Studies
                in Jawaharlal Nehru University (JNU) and is currently the dean of the school. He also holds concurrent
                appointment at the Center of Linguistics in JNU. Prof Jha till recently held the position of the director
                of International Collaboration of JNU. His research interests include Machine Translation, Indian languages
                corpora and standards, Lexicography, e-learning, web based technologies, RDBMS, software design and localization.
                Details on his work can be obtained from <a href="http://sanskrit.jnu.ac.in"><font color="red">http://sanskrit.jnu.ac.in.</font></a>
            </p>

            <p>
                Prof Jha was given an honorary appointment as "Mukesh & Priti Chatter Distinguished Professor of History of Science"
                at the Center for Indic Studies, University of Massachusetts, Dartmouth, USA (2009-12). He has been a visiting professor
                at the Yogyakarta State University, Indonesia (2013), University of Würzburg, Germany (2014 and 2016) and University of
                Florence, Italy (2016).
            </p>
            <p>
                Prof Jha has books published from publishers like Springer Verlag, Cambridge Scholar Publishing, LAP Lambert and has over
                125 research papers/presentations/publications and over 150 invited talks and presentations including many keynotes/plenary
                at prestigious international venues. Prof Jha has been chair/co-chair for at least 12 international seminars/conferences
                and has been nominated member of more than 25 committees. He was nominated to the editorial board of a leading journal
                from Springer and has been a reviewer of many leading journals and proceedings in the area of NLP. He has supervised 49
                M.Phil and 22 Ph.D. students. Prof Jha has organized many international conferences. Prof Jha's efforts in collaboration
                with software industry has led to the development of key technologies for Indian languages. His awards include Datta Peetha
                award for Sanskrit linguistics (2017), KECSS Felicitation award for promotion of Sharada script (2016), EU grant for Visiting
                Professorship at University of Florence (2016), DAAD fellowships for Visiting Professorship at University iof Wurzburg,
                Germany (2014, 2016), Mukesh & Priti Chatter Distinguished Professor of History of Science at University of Massachusetts
                Dartmouth, USA (2009-2012).
            </p>

        </div>
    </section>

    <section id="Dr-Niladri-Sekhar-Dash" class="section Dr-Niladri-Sekhar-Dash">
        <div class="container">

            <h4>Dr. Niladri Sekhar Dash</h4>

            <p>
                Dr. Niladri Sekhar Dash works as an Associate Professor in Linguistic Research Unit, Indian Statistical Institute,
                Kolkata (The Institute of National Importance, Govt. of India). For last 25 years he has been working in the area of
                Corpus Linguistics, Language Technology, Language Documentation and Digitization, Computational Lexicography, Computer
                Assisted Language Teaching, and Manual and Machine Translation. To his credit, he has published 16 research monographs
                and more than 250 research papers in peer-reviewed international and national journals, anthologies, and conference
                proceedings. As an invited speaker Dr. Dash has delivered lectures at more than 40 universities and institutes in India
                and abroad.
            </p>
            <p>
                He acts as Research Advisor for several multinational organizations (e.g., Zi-Corporation (Canada), Mobile Net (Sweden),
                Taylor and Francis (England and US), Cognizant (India), Braahmin Ltd. (India), Mihup (India), Beno Translation (USA), Oxford University
                Press (UK), Reve Systems Ltd. Bangladesh, etc.) which have been working on various domains of Language Technology, Natural
                Language Processing, and Computational Lexicography. Dr. Dash has acted as the Principal Investigator for six projects funded
                by the Ministry of Electronics and Information Technology (MeitY), and the Ministry of Statistics and Programme Implementation (MoSPI)
                Govt. of India. He is the Editor-in-Chief of Journal of Advanced Linguistic Studies― a peer-reviewed international journal of
                linguistics enlisted in UGC journal list (2017); and Editorial Board Member of six international journals. He is a member of
                several linguistic associations across the world and a regular Ph.D. thesis evaluator of several Indian and foreign universities.
                In 2017, he worked as a Visiting Scientist at the Centre for Literacy and Multilingualism (CeLM) at the University of Reading,
                the UK. He is awarded British Academy Visiting Fellowship 2018― a highly prestigious fellowship awarded by British Academy, UK.
                At present, he is working on Parallel Translation Corpus, POS Tagging of Text Corpus, Digital Pronunciation Dictionary,
                Computer Assisted Language Teaching, Digital Lexical Profile, Contextualized Word Sense	Cognition, Bilingual Lexical Database,
                Language Documentation and Digitization, Translation and Application of Corpus Data in Language Disorder research, etc. Details
                of Dr. Dash may be found at <a href=" https://sites.google.com/site/nsdashisi/home/"><font color="red"> https://sites.google.com/site/nsdashisi/home/</font></a>.
            </p>

            <p><b>Title: Part-of-Speech (POS) Tagging of Words in Bangla Text Corpus: Catching a Slippery Eel in a Turbulent Water </b></p>

            <p>
                <b>Abstract</b></br>
                In Natural Language Processing, Language Technology, and Computational Linguistics, the idea of part-of-speech (POS) tagging is
                linked with assigning words to particular parts-of-speech. It is also known as Grammatical Annotation (GA) and Word Category
                Disambiguation (WCD), the primary task of which involves the process of marking each and every word with a tag – manually or
                automatically – within a piece of natural text as corresponding to a particular part-of-speech, based on its form and function
                in contexts of its use in larger syntactic frames like phrases, sentences, paragraphs, and texts. An electronically developed
                language corpus, after being tagged at the part-of-speech level, becomes a valuable resource for various works of natural language
                processing, language technology, computational linguistics, machine learning, cognitive linguistics, applied linguistics, and
                descriptive linguistics. POS tagging is generally carried out on electronic version of a language corpus (manually or automatically)
                using a set of predefined tags, which are primarily used to assign part-of-speech, linguistic properties, and functions of words,
                terms, and other lexical items used in corpus. The issue of assigning part-of-speech to words, although appears to be simple,
                straightforward, and one dimensional, is in fact, embedded with several theoretical and technical complexities with regard to
                identification of actual lexico-semantic entities and syntactico-grammatical functions of words used in a piece of text. Also, it
                includes defining the basic hierarchical modalities of tag assignment and designing a rule-based schema useful for automatic assignment
                of tags to words. All these issues ask for a highly synchronized strategy designed elegantly with proper combination of linguistic
                and extralinguistic knowledge and computational expertise for achieving maximum success with minimum enterprise. Keeping these issues
                in view, in this talk, I make an attempt to define maxims, principles, and rules that we need to follow if we want to design a Tagset
                for tagging words at the part-of-speech level in a Bangla text. I also suggest strategies that we need to adopt when we try to tag
                words manually as well as formulate algorithms meant for automatic assignment of POS tags to words used in Bangla corpus. Although I
                address some important theoretical issues relating to the field of inquiry within its general scope and propose some rudimentary
                rules to be followed at the time of POS tagging, I deliberately avoid all technical issues and computational aspects of POS tagging
                with a clear expectation for making the topic of investigation an open area of general interest and enquiry. However, I meticulously
                address almost all major linguistics and extralinguistics issues relating to the process of manual POS tagging referring to instances
                taken from a Bangla written text corpus. I consider this talk as a ‘generic speech’ the principal goal of which is to clarify the very
                concept of POS tagging; identify the maxims and principles of POS tagging; highlight the pros and cons of the tagset proposed by the
                Bureau of Indian Standard (BIS); define strategies and rules for POS tagging of Bangla texts; and make aware the new generation of
                scholars who are going to be engaged in the task of POS tagging of Bengali corpus about the invisible quicksand on the path of their
                journey.
            </p>

            <p>
                <b>Keywords:</b> annotation, tagging, noun, verb, adjective, adverb, postposition, Bangla, part-of-speech, morphology, syntax, semantics, context
            </p>

        </div>

    </section>

    <section id="Dr-Firoj-Alam" class="section Dr-Firoj-Alam">
        <div class="container">

            <h4>Dr. Firoj Alam</h4>

            <p>
                Dr. Firoj has been working for more than 10 years in the fields of Artificial Intelligence, which
                include Deep/machine learning, Natural Language Processing, Speech and Behavioral Signal
                Processing. He received his PhD with a specialization of Human Language Technology and a
                particular focus on Behavioral Signal Processing (Empathy, Emotion, Personality traits) from the
                University of Trento, Italy. He has been part of an EU conversation summarization project,
                SENSEI. (<a href="http://www.sensei-conversation.eu"><font color="red">http://www.sensei-conversation.eu</font></a>),
                where he has developed a spoken conversation summarization system. He has also developed information extraction systems,
                particularly, Named Entity Recognition and Relation extraction for different domains. Recently, he started
                working on developing an AI system for social media data to facilitate early responders during
                disaster events. He has significant contributions in Bangla Language Computing Research with
                a special focus on Bangladeshi Bangla. In his early research career, he has developed Bangla
                Text to Speech system and other linguistic resources (e.g., Pronunciation dictionary, Text and
                Speech Corpus) and made them publicly available. His research interests include Applied
                Deep/Machine Learning, Natural Language Processing, Affective Behavior and Speech
                Processing. He is serving as a reviewer in different international conference and journal such as
                ACL, Interspeech. He has more than 35 research papers, including book chapters, published in
                international conferences and journals.
            </p>

            <p>
                <b>Title: Speech Synthesis: Past, Present and Future -- Current Status of Bangla Speech Synthesis </b>
            </p>

            <p>
                <b>Abstract</b></br>
                Generating intelligible and natural speech with computers or other hand-held devices has been a
                goal for speech community researcher. The purpose is to facilitate visually impaired people as
                well as improve human-machine interaction (e.g., dialogue system, speech-to-speech
                translation). It is a process usually referred to as speech synthesis, also known as Text to Speech.
                The speech synthesis consists of two main components, frontend and the synthesizing module.
                The frontend module analyzes input text and transform into spoken form, while the synthesizer
                transforms the spoken form into the speech waveform. The first part is mainly language specific.
                It requires the development of linguistic resources such as phoneme inventory, lexical rules for
                the normalization of text to standard spoken form, pronunciation dictionary, linguistic and
                speech corpus for developing machine learning models. The second part is language independent
                and has two types of methods that have been developed in the last few decades. The first method
                is example-based -- a concatenative approach. The most widely used techniques for this
                approach are diphone and unit-selection. The second method is model-based (aka. parametric)
                such as articulatory speech synthesis, formant, statistical parametric and very recent deep neural
                network based model – wavenet. This talk will highlight such techniques – their advantages,
                limitations and challenges. In addition, a major focus will be given to discuss the current status
                of Bangla Speech Synthesis and possible research avenues that the research community can
                address.
            </p>
        </div>
    </section>
</section>

<section id="registration" class="section registration">
    <div class="container">
        <h3 class="section-title">Registration</h3>
        <div class="row">
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;}
                .tg td{font-family:'Roboto', sans-serif;font-size:16px;padding:15px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                .tg th{font-family:'Roboto', sans-serif;font-size:16px;font-weight:normal;padding:15px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                .tg .tg-yhvb{background-color:#ffffff;text-align:center}<!--ffc702-->
                                                                            .tg .tg-ate8{background-color:#ffffff;text-align:center;vertical-align:top}
                .tg .tg-2thk{background-color:#c0c0c0;text-align:center}<!--c0c0c0-->
                                                                            .tg .tg-vkov{background-color:#ffffff;text-align:center}<!--32cb00-->
                                                                                                                                          .tg .tg-s6z2{text-align:center}
                .tg .tg-pp9q{background-color:#00d2cb;text-align:center}
                .tg .tg-baqh{text-align:center;vertical-align:top}
                .tg .tg-q3eh{background-color:#68cbd0;text-align:center;vertical-align:top}
                .tg .tg-9fhq{background-color:#68cbd0;text-align:center}
                .tg .tg-jdmv{background-color:#00d2cb;text-align:center;vertical-align:top}
                .tg .tg-l5iw{background-color:#32cb00;text-align:center;vertical-align:top}
            </style>
            <center>
                <table class="tg">
                    <tr>
                        <th class="tg-2thk" rowspan="3"></th>
                        <th class="tg-pp9q" colspan="4">Paper/Poster</th>
                    </tr>
                    <tr>
                        <td class="tg-vkov" colspan="2">IEEE Member </td>
                        <td class="tg-vkov" colspan="2">Non IEEE Member</td>
                    </tr>
                    <tr>
                        <td class="tg-yhvb">Student</td>
                        <td class="tg-yhvb">Professional</td>
                        <td class="tg-yhvb">Student</td>
                        <td class="tg-yhvb">Professional</td>
                    </tr>
                    <tr>
                        <td class="tg-9fhq">Local</td>
                        <td class="tg-s6z2">BDT 2000</td>
                        <td class="tg-s6z2">BDT 3000</td>
                        <td class="tg-s6z2">BDT 2000</td>
                        <td class="tg-s6z2"> BDT4000</td>
                    </tr>
                    <tr>
                        <td class="tg-q3eh">Foreign</td>
                        <td class="tg-baqh">USD 100 </td>
                        <td class="tg-baqh">USD 200  </td>
                        <td class="tg-baqh">USD 100  </td>
                        <td class="tg-baqh">USD 250</td>
                    </tr>
                </table>
            </center>
        </div>

        <h4>Payment Method</h4>
        <p><font color="red">Payment method will be announced soon.</font></p>

    </div>
</section>

<section id="dates" class="section dates">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Important Dates</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="schedule-box">
                    <h3>Paper/Poster</br>Submission</h3>
                    <h4>August 12, 2018</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="schedule-box">
                    <h3>Acceptance<br>Notification</h3>
                    <h4> August 26, 2018<h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="schedule-box">
                    <h3>Registration</br>Opens</h3>
                    <h4> August 27, 2018<h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="schedule-box">
                    <h3>Camera-ready</br>Paper Due</h3>
                    <h4> September 02, 2018<h4>
                </div>
            </div>
        </div>
</section>

<section id="committees" class="section committees">
    <div class="container">
        <h3 class="section-title">Conference Committees</h3>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h4><center> Chief  Patron  of  the  Conference</center> </h4>
                <img alt="" class="img-responsive center-block" src="{{ asset('assets/images/photos/VC_SUST.PNG') }}">
                <h4><center>Prof.  Farid  Uddin  Ahmed</br>Vice  Chancellor,  SUST</center></h4>
            </div>
            <div class="col-md-4 col-sm-6">
                <h4><center>Conference Chair</center></h4>
                <img alt="" class="img-responsive center-block" src="{{ asset('assets/images/photos/ZAFOR.png') }}">
                <h4><center>Prof.  Dr.  M.  Zafar  Iqbal</br>Dept.  of  CSE,  SUST </center></h4>
            </div>
            <div class="col-md-4 col-sm-6">
                <h4><center>Technical Committee Chair</center></h4>
                <img alt="" class="img-responsive center-block" src="{{ asset('assets/images/photos/Kaykobad.jpg') }}">
                <h4><center>Prof. Dr. M. Kaykobad</br>Dept. of CSE, BUET</center></h4>
            </div>
        </div>
    </div>

    <section id="advcommittee" class="advcommittee">
        <div class="container">
            <h3>Conference  Advisory  Committee</h3>
            <p></p>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Prof.  Dr.  Sikder  Monoare  Murshed</br>Dept.  of  Linguistics,  DU</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Dr.  Niladri  Sekhar  Dash</br>Indian  Statistical  Institute,  Kolkata,  India </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>SM  Ashraful  Islam</br>Executive  Vice  Chairman,  eGeneration  group,  Dhaka</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Prof. Dr. Girish  Nath  Jha</br>Jawaharlal  Nehru  University,  Delhi,  India </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Dr.  Firoj  Alam</br>QCRI,  Qatar </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Prof.  Dr.  Md.  Monirul  Islam</br>Dept  of  CSE,  BUET</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Prof.  Dr.  M.  A.  Karim</br>University  of  Massachusetts,  Dartmouth,  USA</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Prof.  Dr.  M. M. A.  Hashem</br>Dept  of  CSE,  KUET</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Prof.  Dr.  Md.  Abdul  Mottalib</br>Dept  of  CSE,  BRAC  University</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Dr. Shisir Bhattacharja</br>Professor,  Institute of Modern Languages, University of Dhaka.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Prof.  Dr.  A  M  M  Mukaddes</br>Dean,  School  of  Applied  Sc.  &amp;  Tech.  SUST</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Dr.  Md  Zafir  Uddin</br>Associate  Professor,  Dept.  of  Bangla,  SUST</p>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Professor Anupam Basu</br>Director, National Institute of Technology, Durgapur</br>Professor (on-lien), Dept. of Computer Science & Engineering (CSE)
                        IIT Kharagpur 721302</p>
                </div>
            </div>
        </div>
    </section>

    <section id="techcommittee" class="techcommittee">
        <div class="container">
            <h3>Technical  Programme  Committee</h3>
            <p></p>
            <h4>Members</h4>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Celia Shahnaz, Ph.D. SMIEEE, FIEB</br>Professor, Dept. of EEE, BUET</br>Chair, IEEE Bangladesh Section</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Professor Dr. Shaikh Anowarul Fattah</br>Dept. of  EEE, BUET</br>Nominations and Appointments Chair</br>IEEE Bangladesh Section</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Prof. Dr. M.  Reza  Selim</br>Dept.  of  CSE,  SUST  </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Prof.Dr.  M.  Sohel  Rahman</br> Dept. of CSE,  BUET </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Prof. Dr. M.  Jahirul  Islam</br> Dept.  of  CSE,  SUST</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Prof. Dr. Khademul  Islam  Molla</br>Dept.  of  CSE,  RU </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Prof.  Dr.  Md.  Hanif  Seddiqui</br>Dept.  of  CSE,  CU </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Dr.  Fuad  Rahman</br>Apurba  Technologies  Inc.  Dhaka</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Prof.  Dr.  Hasan  Sarwar</br>Dept.  of  CSE,  UIU,  Dhaka</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Prof.  Dr.  Syed  Akhter  Hossain</br>Dept.  of  CSE,  DIU,  Dhaka </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Dr. K. M. AZHARUL HASAN</br>Professor, Dept of CSE, KUET</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Dr.  Md.  Moshiul  Hoque</br>Professor,  Dept.  of  CSE,  CUET</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Dr. Moinul Islam Zaber</br>Associate Professor, Dept. of CSE, DU</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Mr.  Md.  Ruhul  Amin</br>Asst.  Prof,  Dept.  of  CSE,  SUST</p>
                </div>

                <div class="col-md-4 col-sm-6">

                </div>
            </div>
        </div>
    </section>

    <section id="orgcommittee" class="orgcommittee">
        <div class="container">
            <h3>Organizing  Committee</h3>
            <p></p>
            <h4>Treasurer</h4>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Prof. Dr. M.  Reza  Selim</br>Head,  Dept.  of  CSE,  SUST</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h4>Organizing  Secretary</h4>
                    <p>Prof.  Dr.  M.  Shahidur  Rahman</br> Dept.  of  CSE,  SUST</p>
                </div>
            </div>

            <h4>Joint  Secretaries</h4>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Dr.  Md.  Forhad  Rabbi</br>Associate  Professor,  Dept.  of  CSE,  SUST </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Dr.  Md.  Khairullah</br>Associate  Professor, Dept.  of  CSE,  SUST </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Dr.  Md.  Sadek  Ferdous</br>Assistant  Professor, Dept.  of  CSE,  SUST</p>
                </div>
            </div>


            <h4>Members</h4>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Mrs.  Sharmin  Mahjabin  Shammi</br>Director  of  Marketing,  EATL  </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Mr.  Md.  Masum</br> Associate  Professor,  Dept  of  CSE,  SUST     </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Dr.  Farida  Chowdhury</br>Associate  Professor,  Dept  of  CSE,  SUST </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Mr.  Md.  Saiful  Islam</br> Assistant  Professor,  Dept  of  CSE,  SUST </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Mr.  Sheikh  Nabil  Mohammad</br>Assistant  Professor,  Dept  of  CSE,  SUST </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Mr.  Asif  Md.  Samir</br> Assistant  Professor,  Dept of IICT, SUST</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Mr.  Md.  Mahadi  Hasan  Nahid</br> Lecturer,  Dept  of  CSE,  SUST</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Mr.  Mohammed  Jaynal  Abedin</br> Asst.  Registrar,  SUST </p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Mr.  Mahbubur  Rub  Talha</br> Team  Lead,  Pipilika,  Dept  of  CSE,  SUST</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <p>Mr.  Shafkat  Kibria</br> Ph.D.  Fellow,  Dept  of  CSE,  SUST</p>
                </div>
            </div>
        </div>
    </section>

</section>

<section id="venue" class="section venue">
    <div class="container">
        <h3 class="section-title">Venue</h3>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <p>Dr.  M  A  Wazed  Miah  IICT  Building</br>Shahjalal University of Science and Technology </br>Sylhet-3114, Bangladesh</p>
                <p>
                <ul>
                    <li>Phone: +880 821 713491/ 714479 Ext. 803</li>
                    <li>Mail: <a href="mailto:secretary@icbslp.org">secretary@icbslp.org</a> or <a href="mailto:icbslp2018@sust.edu">icbslp2018@sust.edu</a></li>
                    <li>Facebook: <a href="https://fb.me/icbslp2018">https://fb.me/icbslp2018</a></li>
                </ul>
                </p>
            </div>
            <div class="col-md-4 col-sm-6">
                <img alt="" class="img-responsive center-block" src="{{ asset('assets/images/photos/IICT1.PNG') }}">
            </div>
            <div class="col-md-4 col-sm-6">
                <img alt="" class="img-responsive center-block" src="{{ asset('assets/images/photos/IICT2.PNG') }}">
            </div>
        </div>
    </div>
    <section id="travel" class="section travel">
        <div class="container">
            <h3 class="section-title">Travel</h3>
            <p>TBA</p>
        </div>
    </section>

    <section id="accomodation" class="section accomodation">
        <div class="container">
            <h3 class="section-title">Accomodation</h3>
            <p>TBA</p>
        </div>
    </section>
</section>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="site-info">Designed and <br> Developed by CSE SUST</p>
            </div>
        </div>
    </div>
</footer>

<!-- script -->
<script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('flipclock/flipclock.js') }}"></script>
<script src="{{ asset('bower_components/smooth-scroll/dist/js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script type="text/javascript">
  var clock;

  $(document).ready(function() {
    // Set dates.
    var futureDate  = new Date("September 11, 2018 11:59 PM EDT");
    var currentDate = new Date();

    // Calculate the difference in seconds between the future and current date
    var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

    // Calculate day difference and apply class to .clock for extra digit styling.
    function dayDiff(first, second) {
      return (second-first)/(1000*60*60*24);
    }

    if (dayDiff(currentDate, futureDate) < 100) {
      $('.clock').addClass('twoDayDigits');
    } else {
      $('.clock').addClass('threeDayDigits');
    }

    if(diff < 0) {
      diff = 0;
    }

    // Instantiate a coutdown FlipClock
    clock = $('.clock').FlipClock(diff, {
      clockFace: 'DailyCounter',
      countdown: true
    });
  });
</script>
</body>
</html>
