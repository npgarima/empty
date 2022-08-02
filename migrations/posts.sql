-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2022 at 06:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myfiction`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `keywords` varchar(1000) NOT NULL,
  `media` varchar(500) NOT NULL,
  `en_author` varchar(50) NOT NULL,
  `np_author` varchar(50) NOT NULL,
  `en_content` text NOT NULL,
  `np_content` text NOT NULL,
  `en_podcast_url` varchar(500) NOT NULL,
  `np_podcast_url` varchar(500) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `view_count_app` int(7) NOT NULL,
  `view_count_web` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `keywords`, `media`, `en_author`, `np_author`, `en_content`, `np_content`, `en_podcast_url`, `np_podcast_url`, `created_at`, `view_count_app`, `view_count_web`) VALUES
(1, 'Same title', 'sddsd,sdd', 'https://www.myfictions.com/admin/upload/post/62bc2954aa53d8.91732936.jpg', 'Sulav Parajuli', 'Sulav Parajuli', '\r\nPhoto by Aqib Shahid: https://www.pexels.com/photo/grayscale-photo-of-motorcycles-on-the-road-571785\r\n\r\n                                                          \r\n\r\nAbu Dhabi,Dubai.The temperature outside the room was above 45°C and because of that ,an AC was switched on to get rid of that skin peeling temperature. Vaibhav Shahi and Yubaraj Shahi were lying in their bed to have siesta.However,neither of them was able to do so. It seemed as if something was bothering them, making them feel restless.\r\n\r\n“Baibhav, are you thinking over the same matter that my mind is spinning upon?” asked Yubaraj.\r\n\r\n“I’m not thinking, Yubaraj.In fact, I’m stuck upon that dreadful proposal and trying to figure a way out, so that it could be kept at bay.”\r\n\r\n     At once, Baibhav stood up and fetched a cold drink from the fridge.\r\n\r\n“Will you have one?” he asked Yubaraj.\r\n\r\n“I think that’s the only way out to calm down this boiling mind.”\r\n\r\n    Another bottle was passed to Yubaraj and the duos had their drinks. Even though they were having cold drinks and the AC was on, droplets of sweat could be seen on their foreheads.Probably,that was the result of that dreadful proposal that they were talking about. Five years back, they were newbie in that supermarket where they were employed. They had come there from Nepal, a beautiful country in South Asia. A handsome salary, along with lodging and fooding facility was provided by the company. That supermarket was a diverse cultural work place as people from different countries had come for employment. Though everyone was amiable there, they had developed an intense intimacy with Hafiz Siddiqui and Kamran Shah, who were from Pakistan. These Pakistani guys were often seen with Baibhav and Yubaraj in their rooms and vice-versa. A good weekend was an indispensable part of their work. It was celebrated in each other’s rooms, alternately.\r\n\r\n        In 2020, Baibhav and Yubaraj had taken them to their home in Lamjung.That became an unforgettable and the most memorable trip for them because of the most hospitable etiquettes that had been given to them. The most memorable part was their trip to Mustang, one of the celestial heavens of Nepal. The trip to Mustang had given them the feeling of being at home as their abode in Pakistan was at the foot of beautiful hill station, Murree in Rawalpindi. Thereupon, they made a promise to take the Nepalese duos to their home in Pakistan. The entire expenses, even for visa and airfare, were promised to be paid by Hafiz and Kamran. Right then, Baibhav and Yubaraj had resented for the plan, but the same plan was being problematic for them at the moment.\r\n\r\n      The reason for their growing restlessness was due to a surprise given by Hafiz and Kamran. Their company had settled the annual transactions and had allotted two week leave for its selected employees. It was generally given in rotation and this year, it was allotted to four of them. A few days back, Hafiz had taken their passports secretly and got it stamped for a visit to Pakistan. Hafiz had a close person working at the Pakistani Embassy in Dubai.Hence,he was able to get the visa approved even without the presence of Baibhav and Yubaraj as the required documents had already been given.\r\n\r\n“A strange image begins to revolve in my mind when I hear the word ‘Pakistan’,” Baibhav said.\r\n\r\n“How it’s like?” asked Yubaraj in utmost curiosity.\r\n\r\n“I imagine that even a ten years boy is holding an AK 47,a grenade launcher or even other deadlier weapons. The long bearded men with terrifying face come to the strangers and usurp them with utmost atrocity and rob them off everything. If required, they won’t hesitate even to shoot and kill.”\r\n\r\n“The same image applies in my case, too.But again I think of my other Pakistani colleagues-Wasim, Samir, Hamid and others. Do they look like terrorists? Have they ever terrorized us? I also recall the time when we had made an internet call with their families. Their small sons and daughters greeted us saying ‘Namaste’ while their mothers had blessed us.”\r\n\r\n     Baibhav remained silent and there was a knock at the door. Upon opening the door, they were Hafiz and Kamran. With their entry, a new atmosphere was ignited.\r\n\r\n“So, how’s the surprise, my boys?” asked Hafiz.\r\n\r\n  Yubaraj and Baibhav said that it was the best one though their internal thoughts were in discordant with their utterance.\r\n\r\n“Day after tomorrow, we’ll be departing from here. Are you done with the packing?” Kamran inquired further.\r\n\r\n“Not yet, but will be done as it’s the matter of a few minutes,” Yubaraj replied.\r\n\r\n“Get ready to explore Pakistan. I won’t disclose many things, but we’ll take you to the Fairy Meadow as well, one of the most sought beauties of Pakistan. Let other things remain veiled,” Hafiz said, keeping his hands on Baibhav\'s shoulder.\r\n\r\n  After almost an hour of stay, they departed and then the Nepalese guys got involved in packing their belongings, reluctantly.While doing the packing up, Baibhav came up with an idea.\r\n\r\n“Let’s explore Pakistan virtually. This will, at least, clarify many things and doubts that we’ve in our mind. What do you say?”\r\n\r\n“Yes, that’s a good idea. But I think the stuffs in the virtual world and the reality have much difference.”\r\n\r\n“But what if we explore the videos of foreigners in Pakistan? At least that won’t be\r\n\r\nas biased as that of a typical native of Pakistan. That way we’ll muster up some courage and remove our dilemma to some extent.”\r\n\r\n  Yubaraj nodded and then Baibhav switched on his laptop. On searching the visit of foreigners in Pakistan, they witnessed unprecedented ideas about Pakistan. Those foreigners were unconditionally ecstatic visiting there and their hospitable nature had made them gain peculiar apprehension for them. There were some events of misdeeds and fraud with the foreigners as well.However, it’s wrong to generalize one person’s conducts and behaviour to everyone.Vloggers from Europe,America,even India and many other countries seem to have enjoyed there a lot. Their fear and doubts were cleared to  a great extent.Still,they couldn’t be confirmed about it until and unless a firsthand observation was made.Eventually,they were ready to explore the best kept secrets of Pakistan,in spite of a few traces of vacillation.\r\n\r\n “What’s the joy of life if you stop enjoying and retreat due to the fear of death? It’s sure to come. If others are having a good time in Pakistan, why can’t we?” Baibhav spoke.\r\n\r\n“Yeah, buddy.That’s the point. Pain is temporary, but regret is permanent. So let’s take this pain to enjoy life on our first hand observation.”\r\n\r\n    The packing was finally done and then they came out to explore the market to buy some more stuff for the trip, if required. Going out and visiting places gave them relief and elevated their sanguine. To maintain that sanguine at the peak, they kept on watching vlogs about Pakistan until the departure day. On the flight’s day, they met at Abu Dhabi Airport.\r\n\r\n“So, how’s the adrenaline in your body?” Kamran asked to the Nepali duos.\r\n\r\n“To be frank, it’s shooting high with nervousness and less with excitement,”Baibhav replied.\r\n\r\n“Don’t panic. Soon that nervousness will also be changed into excitement,” Hafiz said.\r\n\r\n     They boarded the plane and the journey to Pakistan began.It was a flight of around four hours as the bird’s fly. In the sky, the nervousness was heightened by the lightening and the turbulence of the plane.\r\n\r\n“Seems as if I’ll be martyred in the sky before someone shoots me in Pakistan,” Baibhav thought, gulping saliva in fear.\r\n\r\n   Yubaraj’s condition was also the same.\r\n\r\n“Oh my God! May be Hafiz and Kamran will save me from the terrorists in Pakistan, but who will save me from this terror of the sky? Let this flight land safely in Pakistan and then I’ll escape from there by running. But for now, don’t strike this havoc upon the flight.Please, God.”\r\n\r\n  After several hours, water, buildings, people and so on were visible from the windows. The plane finally landed at Benazir Bhutto International Airport in Islamabad. They came out of the airport after taking their luggage.\r\n\r\n“How far is your home from here?” Yubaraj asked.\r\n\r\n“It’s about 64.5 kilometer from here.Roughly, it will take us one and half hour to reach there,” Kamran replied.\r\n\r\n“Let’s take a taxi and go on exploring the way to our home,” Hafiz proposed.\r\n\r\n       A taxi was called and the main journey began. They stopped at a dhaba on the way to enjoy typical Pakistani food. From the appearance of the Nepali duos, it was crystal clear that they were the foreigners.So, they were being the center of attraction in that place. There came a small boy, perhaps six, and took a selfie with them.\r\n\r\n“Where are these guys from?” asked the dhaba owner.\r\n\r\n“From Nepal,” replied Hafiz.\r\n\r\n“Wow! A lovely country! Namaste janab,” the dhaba owner greeted them.\r\n\r\n“Namaste,” Yubaraj and Baibhav greeted back together, in surprise.\r\n\r\n“Are you well versed in Nepali language?” Baibhav asked in utter astonishment.\r\n\r\n“Thorai aaucha (I know a little).I’ve my friends from Nepal. They had come here two years back. They were very jovial guys. Since then, I’ve been in regular touch with them via the social media and it’s the effect of their companionship.”\r\n\r\n    Having done with the food, Hafiz took out the payment, but the owner refused to take as the two Nepalese guys were guests for him.\r\n\r\n“Hafiz, which of the media in the world will show this unearthed part of your country?” Baibhav asked in a grave tone.\r\n\r\n    The owner was hugged. Though Baibhav was feeling relaxed now, Yubaraj was dwindling to adjust among the new people and the place. Before they departed, Yubaraj wanted to relive himself because of nature’s call and went to the restroom. He came back after a while and all of them walked back to get into the taxi and then ‘Baaaaaang!’\r\n\r\n\r\n\r\nA very loud blast took place, and some tall guys with long beards in pathani dresses were seen. Yubaraj lay on the ground quickly, unaware of the situation and almost lost his mind on seeing those men coming towards him, after the blast.\r\n\r\n“Please, don’t shoot me! I never wanted to come here! Have mercy upon me!”\r\n\r\nHe started babbling like a crazy person as a result of an anticipated shock.\r\n\r\n', '\r\nएकदमै चर्को विस्फोट भयो र पठानी पहिरन लगाएका लामो दाह्री भएका केही अग्ला केटाहरू देखिए। युवराज हतार हतार भुइँमा पल्टिए, परिस्थितिको अनभिज्ञता र विष्फोटपछि ती मानिसहरूलाई आफूतिर आउँदै गरेको देखेर उनको दिमाग हरायो।\r\n\r\n\"कृपया, मलाई गोली नहान्नुहोस्! म यहाँ कहिल्यै आउन चाहन्न! ममाथि दया गर्नुहोस्!”\r\n\r\nअनुमानित झटकाले उनी पागल जस्तै बडबड गर्न थाले।', 'N/A', 'N/A', '2022-07-29', 10, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;