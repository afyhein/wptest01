<?php   
    get_header();
?>
<section id="banner-sec">
    <div class="container">
        <div class="slogan">
            <!-- <h1>To The <span class="txt-primary">Future</span></h1>
            <h1>with <span class="txt-primary">IT technology</span></h1> -->
        </div>
    </div>
</section>
<section id="about-sec" data-aos="fade-up">
    <div class="container">
        <div class="head-area">
            <div class="title">
                <p>Welcome to our</p>
                <h2>Expertly crafted services for all your digital needs</h2>
            </div>
            <div class="button-area">
                <a href="#service-sec" class="more-btn">more services</a>
            </div>
        </div>
<!--         <p>
            We offer expert solutions for all your digital needs. Our team of professionals specializes in website
            design, BPO service, data annotation, AutoCAD design, graphic design, and video editing. We understand the
            importance of a strong online presence, and our goal is to help you achieve that through our range of
            high-quality services. Our experienced team is dedicated to creating visually stunning designs, efficient
            processes, and accurate data solutions that will help you stand out in your industry. With our help, you can
            focus on growing your business while we handle the technical details. Let us help you take your digital
            presence to the next level.
        </p> -->
		<p>
			We offer expert solutions for all your digital needs, including BPO services, offshore development, SEO and website services, CAD drawing, and data annotation. As a BPO company, we specialize in providing high-quality services for the BPO industry, including outsourced BPO solutions. Our offshore development team can help you with offshore jobs and company offshore needs, including Myanmar offshore development. With our help, you can focus on growing your business while we handle the technical details. Let us help you take your digital presence to the next level.
		</p>
        <div class="card-area">
            <div class="card">
                <!-- <div class="image"></div> -->
                <p>high <span>Quality Service</span></p>
                <p class="explanation">We pride ourselves on delivering top-notch quality in all of our services. From
                    website design to data annotation, we use the latest technologies and industry best practices to
                    ensure that our work meets the highest standards.</p>
            </div>
            <div class="card">
                <!-- <div class="image"></div> -->
                <p>exceptional <span>Customer Service</span></p>
                <p class="explanation">Our customer service is second to none. We believe that communication is key to a
                    successful project, and we work closely with our clients to understand their needs and provide
                    tailored solutions. We are always available to answer questions and provide support throughout the
                    project.</p>
            </div>
            <div class="card">
                <!-- <div class="image"></div> -->
                <p>affordable <span>Pricing Solutions</span></p>
                <p class="explanation">We know that cost is a key consideration for any business, and we strive to
                    provide our services at a competitive price. We believe that high-quality services don't have to be
                    expensive and we will work with you to find a solution that fits your budget.</p>
            </div>
        </div>
    </div>
</section>
<section id="service-sec" data-aos="fade-up">
    <div class="service service-1">
        <div class="inner-container">
            <p class="category">Technology</p>
            <p class="intro">
                Are you looking for a professional website design and development service that can help your business
                grow? Look no further! Our team of experienced web designers and developers have the skills and
                expertise to create stunning websites that are tailored to meet the needs of US-based customers. We
                understand how important it is for businesses in this region to have an online presence, so we strive to
                ensure each website we develop looks great, functions optimally, is SEO friendly, mobile responsive and
                has all the features needed for success. With our dedicated support team on hand every step of the way
                from concept through launch, you can rest assured your project will be completed with precision. Contact
                us today for more information about our services – let's get started building your dream website!
            </p>
            <h3 class="title">Website Design & Development</h3>
        </div>
    </div>
    <div class="service service-2">
        <div class="inner-container">
            <p class="category">Design</p>
            <p class="intro">
                Graphic and motion is a revolutionary service that provides customers with high quality, creative
                graphic design and motion graphics. Our team of experienced professionals are dedicated to delivering
                outstanding results in every project we take on. We understand the importance of creating visuals that
                will capture your target audience's attention, so our services always focus on making sure you get the
                best possible outcome from any given project. With Graphic and Motion, you can trust us to deliver
                stunning visuals that will make your business stand out from the competition!
            </p>
            <h3 class="title">Graphic & Motion</h3>
        </div>
    </div>
    <div class="service service-3">
        <div class="inner-container">
            <p class="category">Artificial Intelligence</p>
            <p class="intro">
                Data annotation is an invaluable service for businesses and organizations looking to maximize the value
                of their data. Our state-of-the-art technology ensures that your data is accurately labeled, organized,
                and structured in a way that provides maximum insight into customer behavior. By leveraging our powerful
                algorithms, you can gain deeper insights into customer trends and preferences which will help inform
                decisions regarding product development or marketing campaigns. With our services, you can rest assured
                knowing your data has been annotated with precision accuracy so you get the most out of it!
            </p>
            <h3 class="title">Data Annotation</h3>
        </div>
    </div>
</section>
<section id="contact-sec" data-aos="fade-up">
    <div class="inner-container">
        <div class="form">
            <?php echo do_shortcode( '[wpforms id="13" title="false"]' ); ?>
			<div class="wpforms-output-container" id="wpforms-output"></div>
        </div>
        <div class="information">
            <div class="head-area">
                <h3>Get in Touch</h3>
                <p>We are looking forward to start a project with you</p>
            </div>
            <div class="contact-info-area">
                <p><a href="https://goo.gl/maps/CKJAfcdBwKaPQFme7" target="_blank">Room 606,6th Floor, Yadanar Housing, Pyay Road, Mayangone Township, Yangon, Myanmar</a></p>
                <p><a href="tel:+95 9 953 483195">+95 9 953 483195</a></p>
            </div>
            <div class="social-icons-area">
                <a href="https://www.facebook.com/afyangon/" target="_blank" class="sns-icon">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.youtube.com/@andfunyangon4535/" target="_blank" class="sns-icon">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>