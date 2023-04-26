<?php
if (file_exists('config.json')) {
    $filename = 'config.json';
    $data = file_get_contents($filename);
    $config = json_decode($data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privacy Policy</title>
</head>
<body>
<h1>Privacy Policy</h1>
<a href="de.php">&#x1F1E9;&#x1F1EA;</a>

<h2>1. Data protection at a glance</h2>
<h3>General notes</h3>
<p>The following notices provide a simple overview of what happens to your personal data when you visit this website. Personal data is any data that can be used to identify you personally. For detailed information on the subject of data protection, please refer to our privacy policy listed below this text.</p>
<h3>Data collection on this website</h3>
<h4>Who is responsible for the data collection on this website?</h4>
<p>The data processing on this website is carried out by the website operator. You can find the contact details of the website operator in the section "Information about the responsible party" in this data protection declaration.</p>
<h4>How do we collect your data?</h4>
<p>On the one hand, your data is collected when you provide it to us. This can be, for example, data that you enter in a contact form.</p>
<p>Other data is collected automatically or after your consent when you visit the website by our IT systems. This is mainly technical data (e.g. internet browser, operating system or time of page view). The collection of this data takes place automatically as soon as you enter this website.</p>
<h4>What do we use your data for?</h4>
<p>Some of the data is collected to ensure error-free provision of the website. Other data may be used to analyze your user behavior.</p>
<h4>What rights do you have regarding your data?</h4>
<p>You have the right at any time to receive information free of charge about the origin, recipient and purpose of your stored personal data. You also have a right to request the correction or deletion of this data. If you have given your consent to data processing, you can revoke this consent at any time for the future. You also have the right to request the restriction of the processing of your personal data under certain circumstances. Furthermore, you have the right to lodge a complaint with the competent supervisory authority.</p>
<p>You can contact us at any time with regard to this and other questions on the subject of data protection.</p>

<h2>2. General notes and mandatory information</h2>
<h3>Data privacy</h3>
<p>The operators of these pages take the protection of your personal data very seriously. We treat your personal data confidentially and in accordance with the statutory data protection regulations and this privacy policy.</p>
<p>When you use this website, various personal data are collected. Personal data is data with which you can be personally identified. This privacy policy explains what data we collect and what we use it for. It also explains how and for what purpose this is done.</p>
<p>We point out that data transmission over the Internet (eg communication by e-mail) security gaps. A complete protection of the data against access by third parties is not possible.</p>
<h3>Note on the responsible body</h3>
<p>The responsible party for data processing on this website is:</p>
<p><?= $config->address; ?></p>
<p>Phone: <a href="tel:<?= $config->phone; ?>"><?= $config->phone; ?></a> <br>
    E-mail: <a href="mailto:<?= $config->email; ?>"><?= $config->email; ?></a></p>
<p>The controller is the natural or legal person who alone or jointly with others determines the purposes and means of the processing of personal data (e.g. names, e-mail addresses, etc.).</p>
<h3>Storage duration</h3>
<p>Unless a more specific storage period has been specified within this privacy policy, your personal data will remain with us until the purpose for data processing no longer applies. If you assert a legitimate request for deletion or revoke your consent to data processing, your data will be deleted unless we have other legally permissible reasons for storing your personal data (e.g. retention periods under tax or commercial law); in the latter case, the data will be deleted once these reasons no longer apply.</p>
<h3>General information on the legal basis for data processing on this website</h3>
<p>If you have consented to data processing, we process your personal data on the basis of Art. 6 (1) a DSGVO or Art. 9 (2) a DSGVO, if special categories of data are processed according to Art. 9 (1) DSGVO. In the case of explicit consent to the transfer of personal data to third countries, the data processing is also based on Art. 49 (1) a DSGVO. If you have consented to the storage of cookies or to the access to information in your terminal device (e.g. via device fingerprinting), the data processing is additionally carried out on the basis of Section 25 (1) TTDSG. The consent can be revoked at any time. If your data is required for the performance of a contract or for the implementation of pre-contractual measures, we process your data on the basis of Art. 6 para. 1 lit. b DSGVO. Furthermore, if your data is required for the fulfillment of a legal obligation, we process it on the basis of Art. 6 para. 1 lit. c DSGVO. Furthermore, the data processing may be carried out on the basis of our legitimate interest according to Art. 6 para. 1 lit. f DSGVO. Information about the relevant legal basis in each individual case is provided in the following paragraphs of this privacy policy.</p>
<h3>Revocation of your consent to data processing</h3>
<p>Many data processing operations are only possible with your express consent. You can revoke consent you have already given at any time. The legality of the data processing carried out until the revocation remains unaffected by the revocation.</p>
<h3>Right to object to data collection in special cases and to direct marketing (Art. 21 DSGVO)</h3>
<p>IF THE DATA PROCESSING IS CARRIED OUT ON THE BASIS OF ART. 6 ABS. 1 LIT. E OR F DSGVO, YOU HAVE THE RIGHT TO OBJECT TO THE PROCESSING OF YOUR PERSONAL DATA AT ANY TIME FOR REASONS ARISING FROM YOUR PARTICULAR SITUATION; THIS ALSO APPLIES TO PROFILING BASED ON THESE PROVISIONS. THE RESPECTIVE LEGAL BASIS ON WHICH PROCESSING IS BASED CAN BE FOUND IN THIS PRIVACY POLICY. IF YOU OBJECT, WE WILL NO LONGER PROCESS YOUR PERSONAL DATA UNLESS WE CAN DEMONSTRATE COMPELLING LEGITIMATE GROUNDS FOR THE PROCESSING WHICH OVERRIDE YOUR INTERESTS, RIGHTS AND FREEDOMS, OR THE PROCESSING SERVES THE PURPOSE OF ASSERTING, EXERCISING OR DEFENDING LEGAL CLAIMS (OBJECTION UNDER ARTICLE 21 (1) DSGVO).</p>
<p>IF YOUR PERSONAL DATA IS PROCESSED FOR THE PURPOSE OF DIRECT MARKETING, YOU HAVE THE RIGHT TO OBJECT AT ANY TIME TO THE PROCESSING OF PERSONAL DATA CONCERNING YOU FOR THE PURPOSE OF SUCH MARKETING; THIS ALSO APPLIES TO PROFILING INSOFAR AS IT IS CONNECTED WITH SUCH DIRECT MARKETING. IF YOU OBJECT, YOUR PERSONAL DATA WILL SUBSEQUENTLY NO LONGER BE USED FOR THE PURPOSE OF DIRECT MARKETING (OBJECTION PURSUANT TO ARTICLE 21 (2) DSGVO).</p>
<h3>Right of appeal to the competent supervisory authority</h3>
<p>In the event of breaches of the GDPR, data subjects shall have a right of appeal to a supervisory authority, in particular in the Member State of their habitual residence, their place of work or the place of the alleged breach. The right of appeal is without prejudice to other administrative or judicial remedies.</p>
<h3>Right to data portability</h3>
<p>You have the right to have data that we process automatically on the basis of your consent or in fulfillment of a contract handed over to you or to a third party in a common, machine-readable format. If you request the direct transfer of the data to another controller, this will only be done insofar as it is technically feasible.</p>
<h3>Information, deletion and correction</h3>
<p>Within the framework of the applicable legal provisions, you have the right at any time to free information about your stored personal data, its origin and recipient and the purpose of data processing and, if necessary, a right to correction or deletion of this data. For this purpose, as well as for further questions on the subject of personal data, you can contact us at any time.</p>
<h3>Right to restriction of processing</h3>
<p>You have the right to request the restriction of the processing of your personal data. For this purpose, you can contact us at any time. The right to restriction of processing exists in the following cases:</p>
<ul>
    <li>If you dispute the accuracy of your personal data stored by us, we usually need time to verify this. For the duration of the review, you have the right to request the restriction of the processing of your personal data.</li>
    <li>If the processing of your personal data happened/is happening unlawfully, you may request the restriction of data processing instead of erasure.</li>
    <li>If we no longer need your personal data, but you need it to exercise, defend or enforce legal claims, you have the right to request restriction of the processing of your personal data instead of deletion.</li>
    <li>If you have lodged an objection pursuant to Art. 21 (1) DSGVO, a balancing of your and our interests must be carried out. As long as it has not yet been determined whose interests prevail, you have the right to request the restriction of the processing of your personal data.</li>
</ul>
<p>If you have restricted the processing of your personal data, this data may - apart from being stored - only be processed with your consent or for the assertion, exercise or defense of legal claims or for the protection of the rights of another natural or legal person or for reasons of an important public interest of the European Union or a Member State.</p>
<h3>SSL or TLS encryption</h3>
<p>This site uses SSL or TLS encryption for security reasons and to protect the transmission of confidential content, such as orders or requests that you send to us as the site operator. You can recognize an encrypted connection by the fact that the address line of the browser changes from "http://" to "https://" and by the lock symbol in your browser line.</p>
<p>If SSL or TLS encryption is activated, the data you transmit to us cannot be read by third parties.</p>

<h2>3. Data collection on this website</h2>
<h3>Server log files</h3>
<p>The provider of the pages automatically collects and stores information in so-called server log files, which your browser automatically transmits to us. These are:</p>
<ul>
    <li>Browser type and version</li>
    <li>Operating system used</li>
    <li>Referrer URL</li>
    <li>Host name of the accessing computer</li>
    <li>Time of the server request</li>
    <li>IP address</li>
</ul>
<p>This data is not merged with other data sources.</p>
<p>The collection of this data is based on Art. 6 para. 1 lit. f DSGVO. The website operator has a legitimate interest in the technically error-free presentation and optimization of its website - for this purpose, the server log files must be collected.</p>
<p>Source: <a href="https://www.datenschutzerklaerung.de">https://www.datenschutzerklaerung.de</a></p>

</body>
</html>
