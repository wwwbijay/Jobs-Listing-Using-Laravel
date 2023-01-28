<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'heading' => 'Job Networks',
        'jobs' => [
            [
              'jobtitle' => 'Java Developer',
              'company' => 'Tradelogic Corporation',
              'city' => 'Austin',
              'state' => 'TX',
              'country' => 'US',
              'formattedLocation' => 'Austin, TX',
              'source' => 'Tradelogic Corporation',
              'date' => 'Mon, 22 Jul 2013 01:16:44 GMT',
              'snippet' => 'a <b>Java</b> Developer to join our team. This position will be responsible for design and development of <b>Java</b>... <b>Java</b> or C# Frameworks/Skills: <b>Java</b> EE, <b>Java</b> Swing or... ',
              'url' => 'http://www.indeed.com/viewjob?jk=83400e947276d20b&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
              'onmousedown' => 'indeed_clk(this, \'2673\');',
              'jobkey' => '83400e947276d20b',
              'sponsored' => false,
              'expired' => false,
              'formattedLocationFull' => 'Austin, TX',
              'formattedRelativeTime' => '1 day ago',
            ],
            [
              'jobtitle' => 'Sr. Java Developer',
              'company' => 'CoreLogic',
              'city' => 'Austin',
              'state' => 'TX',
              'country' => 'US',
              'formattedLocation' => 'Austin, TX',
              'source' => 'CoreLogic',
              'date' => 'Fri, 19 Jul 2013 17:22:19 GMT',
              'snippet' => 'Knowledge/Skills Strong <b>Java</b> development skills... abreast of emerging technology trends Core <b>Java</b> and <b>Java</b> Enterprise Edition (JavaEE) Strong relational... ',
              'url' => 'http://www.indeed.com/viewjob?jk=9d2c6535dc61d3b6&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
              'onmousedown' => 'indeed_clk(this, \'2673\');',
              'jobkey' => '9d2c6535dc61d3b6',
              'sponsored' => false,
              'expired' => false,
              'formattedLocationFull' => 'Austin, TX',
              'formattedRelativeTime' => '4 days ago',
            ],
           [
              'jobtitle' => 'Software Developer III - US Job',
              'company' => 'Rackspace',
              'city' => 'Austin',
              'state' => 'TX',
              'country' => 'US',
              'formattedLocation' => 'Austin, TX',
              'source' => 'Rackspace',
              'date' => 'Fri, 19 Jul 2013 04:40:11 GMT',
              'snippet' => 'JavaScript and some of the following languages: Scala Lisp Erlang Haskell Clojure <b>Java</b> Ruby C# Smalltalk Python , Can energetically discuss technical opinions... ',
              'url' => 'http://www.indeed.com/viewjob?jk=066f952bb6793d2b&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
              'onmousedown' => 'indeed_clk(this, \'2673\');',
              'jobkey' => '066f952bb6793d2b',
              'sponsored' => false,
              'expired' => false,
              'formattedLocationFull' => 'Austin, TX 78753',
              'formattedRelativeTime' => '4 days ago',
            ],[
              'jobtitle' => 'Senior Java Developer',
              'company' => 'Bancvue',
              'city' => 'Austin',
              'state' => 'TX',
              'country' => 'US',
              'formattedLocation' => 'Austin, TX',
              'source' => 'BancVue',
              'date' => 'Sat, 20 Jul 2013 09:42:44 GMT',
              'snippet' => 'The Senior <b>Java</b> Developer is responsible for the... field. 7-10 years of experience in <b>Java</b> EE development, including at least one <b>Java</b> framework (e.g. Spring... ',
              'url' => 'http://www.indeed.com/viewjob?jk=8276cdc5acba8b49&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
              'onmousedown' => 'indeed_clk(this, \'2673\');',
              'jobkey' => '8276cdc5acba8b49',
              'sponsored' => false,
              'expired' => false,
              'formattedLocationFull' => 'Austin, TX',
              'formattedRelativeTime' => '3 days ago',
            ],[
              'jobtitle' => 'Web Development Software Engineer',
              'company' => 'HomeAway',
              'city' => 'Austin',
              'state' => 'TX',
              'country' => 'US',
              'formattedLocation' => 'Austin, TX',
              'source' => 'HomeAway',
              'date' => 'Fri, 19 Jul 2013 17:08:15 GMT',
              'snippet' => 'application and supporting <b>Java</b> services with a focus... of high traffic <b>Java</b> web applications. * 1-3 years programming experience in <b>Java</b>. * 1-2 years experience... ',
              'url' => 'http://www.indeed.com/viewjob?jk=223bb8ebe75df8d0&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
              'onmousedown' => 'indeed_clk(this, \'2673\');',
              'jobkey' => '223bb8ebe75df8d0',
              'sponsored' => false,
              'expired' => false,
              'formattedLocationFull' => 'Austin, TX',
              'formattedRelativeTime' => '4 days ago',
            ],[
              'jobtitle' => 'Java Developer',
              'company' => 'Neos Consulting Group, LLC',
              'city' => 'Austin',
              'state' => 'TX',
              'country' => 'US',
              'formattedLocation' => 'Austin, TX',
              'source' => 'Neos Consulting Group, LLC',
              'date' => 'Tue, 16 Jul 2013 08:07:35 GMT',
              'snippet' => 'Neos Consulting is hiring a <b>java</b> web services developer... should have at least 5 years experience in <b>java</b> development, and in building web services. Candidates... ',
              'url' => 'http://www.indeed.com/viewjob?jk=0cd0c0cc57b4b36b&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
              'onmousedown' => 'indeed_clk(this, \'2673\');',
              'jobkey' => '0cd0c0cc57b4b36b',
              'sponsored' => false,
              'expired' => false,
              'formattedLocationFull' => 'Austin, TX',
              'formattedRelativeTime' => '7 days ago',
            ],[
              'jobtitle' => 'Software Engineer',
              'company' => 'AgileAssets',
              'city' => 'Austin',
              'state' => 'TX',
              'country' => 'US',
              'formattedLocation' => 'Austin, TX',
              'source' => 'Indeed',
              'date' => 'Wed, 17 Jul 2013 15:47:31 GMT',
              'snippet' => 'technical skills • 3+ years experience building complex software systems • <b>Java</b> programming expertise • Prior experience in a Scrum or Kanban environment highly... ',
              'url' => 'http://www.indeed.com/viewjob?jk=08cff1b7bea99649&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
              'onmousedown' => 'indeed_clk(this, \'2673\');',
              'jobkey' => '08cff1b7bea99649',
              'sponsored' => false,
              'expired' => false,
              'formattedLocationFull' => 'Austin, TX',
              'formattedRelativeTime' => '6 days ago',
            ],[
              'jobtitle' => 'Software Engineer',
              'company' => 'Yodle',
              'city' => 'Austin',
              'state' => 'TX',
              'country' => 'US',
              'formattedLocation' => 'Austin, TX',
              'source' => 'Yodle',
              'date' => 'Tue, 23 Jul 2013 07:44:00 GMT',
              'snippet' => 'for the job. While <b>java</b> is our predominant language... take pride in what you build. Having programmed in <b>Java</b> will help you get going faster, but your primary... ',
              'url' => 'http://www.indeed.com/viewjob?jk=8560c47cdd63ea70&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
              'onmousedown' => 'indeed_clk(this, \'2673\');',
              'jobkey' => '8560c47cdd63ea70',
              'sponsored' => false,
              'expired' => false,
              'formattedLocationFull' => 'Austin, TX',
              'formattedRelativeTime' => '14 hours ago',
            ],[
              'jobtitle' => 'MTS 1 Software Engineer PayPal',
              'company' => 'eBay Inc.',
              'city' => 'Austin',
              'state' => 'TX',
              'country' => 'US',
              'formattedLocation' => 'Austin, TX',
              'source' => 'eBay',
              'date' => 'Sat, 13 Jul 2013 13:21:45 GMT',
              'snippet' => 'edge technologies like <b>Java</b>, JavaScript, HTML5/CSS3... Asynchronous Events &amp; Messaging Data Architecture <b>Java</b> Enterprise Work experience: Expert in designing... ',
              'url' => 'http://www.indeed.com/viewjob?jk=6df93622f7f5fb61&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
              'onmousedown' => 'indeed_clk(this, \'2673\');',
              'jobkey' => '6df93622f7f5fb61',
              'sponsored' => false,
              'expired' => false,
              'formattedLocationFull' => 'Austin, TX',
              'formattedRelativeTime' => '10 days ago',
            ],[
              'jobtitle' => 'Software Engineer',
              'company' => 'Cisco Systems',
              'city' => 'Austin',
              'state' => 'TX',
              'country' => 'US',
              'formattedLocation' => 'Austin, TX',
              'source' => 'Cisco Systems',
              'date' => 'Fri, 12 Jul 2013 06:12:00 GMT',
              'snippet' => 'management principles. (DVCS) * A variety of languages including: assembly, C, <b>Java</b>, shell script, Perl, Ruby, Python, or equivalent Qualified candidates must... ',
              'url' => 'http://www.indeed.com/viewjob?jk=03f24a020b744ac6&qd=VurSLpjL_C5x-OsC8F-9NGcYiUmqnprrq2MtIyXogmRpzcw_E7jGkHBk-CGbv6Dm_Xi5BXyNYBQGtr4UYaav2xGUWcVBinyLZAVK0SVVur0&indpubnum=1757981803167718&atk=1806r4s2v0mph2o9',
              'onmousedown' => 'indeed_clk(this, \'2673\');',
              'jobkey' => '03f24a020b744ac6',
              'sponsored' => false,
              'expired' => false,
              'formattedLocationFull' => 'Austin, TX',
              'formattedRelativeTime' => '11 days ago',
            ],
        ]
         
    ]);
});