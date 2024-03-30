<?php

return [


    'home' => 'Home',
    'results' => 'Results',
    'results_upload' => 'Upload Results',
    'how_it_works' => 'How It Works',
    'strava_link_insert_text' => 'Insert your Strava link below',
    'forum' => 'Forum',
    'Pokud jste se ocitli na této stránce, tak tu jste patrně poprvé a v tom případě je jednou jedinkrát potřeba doplnit rok narození a pohlaví pro správné zařazení do věkové kategorie.' => 'If you are on this page, you are probably here for the first time and in that case it is necessary to fill in the year',
    'V případě, že nechcete uvádět rok narození, budete automaticky zařazeni do kategorie OPEN 23-39 let.' => 'If you do not want to enter the year of birth, you will be automatically placed in the OPEN 23-39 age group.',
    'about' => 'About',
    'cadence' => 'Cadence',
    'headline_1'=> 'Introduce',
    'headline_2'=> 'Test mode',
    'headline_3'=> 'Basic principle of this platform is connecting with the STRAVA data',
    'headline_4'=> "It's ONLY GPS",
    'headline_5'=> 'Method of calculating time and distance',
    'headline_6'=> 'Trickies of the Strava',
    'headline_7'=> 'Age groups',
    'headline_8'=> 'A duration of the first season',
    'trans_1' => "Probably any normal person would prefer that this site didn't exist, but what's done is done and in memory of Kelvin Kiptum this platform has been created where runners from all over the world can submit their runs achieved in 2:00:35, Kelvin's time. at the Chicago Marathon on October 8, 2023.",
    'trans_2' => "This app is completely free, fully automatic and works 24/7.<br>It is likely that the platform's concept will change in the future depending on the interest.",
    'trans_3' => "This first version/season will run from February 11, 2024 to October 8, 2024, it's maybe clear, what these dates mean, first one is date of Kelvin's fatal crash and second one is date of his world record.",
    'trans_4' => 'After authorisation with the STRAVA runs will uploaded to the platform either automatically, when they are uploaded to the Strava after your running, or they can also be uploaded afterwards from February 11, 2024 by copying them by copying the link to the relevant activity.',
    'trans_5' => "The app accepts all runs that last 2:00:35 or longer. When a run is longer than 2:00:35, the application removes everything over that time and subtracts the average time that was reached by 2:00:35 from the total run time.",
    'trans_6' => "At the moment the application is running in test mode and it's likely that there are still some bugs in the application that will be addressed in operation.",
    'trans_7' => "The each runner can upload any number of results, however to overall results will be counted only the best, it means a run with longest distance.",
    'trans_8' => 'GPS is not and in principle cannot be an accurate way of "doing" race results, it depends on many variables as of location and terrain, with data being taken on GPS receiving devices of better and worse quality and it all does not provide the same conditions for anyone anywhere in the world, so for this reason the results cannot be taken deadly seriously.',
    'trans_9' => "A cadence is one of the values provided to us by most modern watch manufacturers. In our results processing, cadence is used as a control to see if the activity was actually run or recorded in some other, non-running way. <br> Of course, everything can be circumvented these days, but cadence monitoring is one of the things that tries to make that circumvention more difficult. For this reason, it's not possible to use data from cell phones alone to record results, because they don't record cadence themselves, and activity from them simply doesn't get recorded in the results.",
    'trans_10' => 'As already mentioned, the platform calculates everything to time 2:00:35, however, it should be mention, that probably no watch records the position every second, but at intervals, which can be different according manufacter.<br>Therefore, if, for example the record of your run does not contain a time marker exactly at 2:00:35, our program "cuts" it at the first possible time after it, say 2:00:38, it subtracts 3 seconds and subtracts the distance covered in those 3 seconds by calculating the average speed up to that time.',
    'trans_11' => "We all know this, we run for an hour, then take a 15 minute break, then run for an hour again, but the Strava calculates our pace and distance for the two hours. The fact that it actually took 2:15 is indicated by the Elapsed Time. <br>That's not the case of our platform, the result here is the total time from the start of the run to the end of the run and if we take a break during the run, that counts towards the result and therefore, you can not be surprised in this case, that the Strava will show you a different result than our platform.<br>By other words, our platform works with elapsed time, not moving time<br>Watch out for this.",
    'trans_12' => "The Strava is a great helper, but it has its own laws and these need to be taken into account.<br>As is probably obvious, the method of distance between two GPS points can't be entirely accurate. Several principles are used for this purpose, such as the Haversine or Vincenty formula, for example.",
    'trans_13' => "The Strava, or Garmin but have however their own private algorithms for calculation of distance, so we can never get indentically the same results on our platform as the Strava&Garmin,  however that's okay, because the most important thing is that the calculation of all results on our platform is done in the same way for all.<br> Btw - our platform uses for the calculation the mentioned Haversine formula.",
    'trans_14' => "Similary as in standard events here are also age groups and they are the same for women and men and.<br>In a case, if you would like prefer to OPEN category, dont't fill the year of your birth when you'll be register and the platform assignes you to this category.",

];
