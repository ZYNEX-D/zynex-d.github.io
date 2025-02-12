<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="../images/logo-HOME.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="ZYNEX Web Development Agency specializes in creating stunning websites, dynamic web applications, and engaging designs with cutting-edge technologies.">
        <meta name="keywords" content="ZYNEX, Web Development Agency, Web Design, Web Development, Website Development, Responsive Websites, Front-End Development, Creative Web Solutions, ZYNEX Agency, Professional Web Services">
        <meta name="author" content="ZYNEX">
        <link rel="apple-touch-icon" href="images/logo-HOME.svg"> 
        <title>ZYNEX | contact</title>

        <?php include 'components/includes.php' ?>
        
    </head>
    <body class="min-h-screen overflow-x-hidden bg-white selection:bg-primary/10 selection:text-primary dark:bg-gray-900 cursor-hidden">

        <?php
            include 'components/customcursor.php';
            include 'components/header.php';
        ?>

        <section class="py-32 sm:pt-40 md:pt-48 lg:pt-56">
            <div class="mx-auto px-4 sm:px-12 xl:max-w-5xl xl:px-0">
                <div class="relative z-10 text-center md:mx-auto md:w-5/6 lg:w-4/6" >
                    <h1 class="relative text-center text-4xl font-bold text-gray-900 dark:text-white sm:text-5xl md:text-6xl" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="0">Start building <span class=" bg-gradient-to-r from-secondaryLight to-secondary bg-clip-text px-2 text-transparent">here.</span></h1>
                    <p class="mt-6 text-gray-700 dark:text-gray-300" data-aos="fade" data-aos-duration="2000" data-aos-delay="1000">We'll help you find the right plan and pricing for your business.</p>
                </div>

                <div class="mt-12 grid gap-12 sm:mx-auto sm:max-w-lg lg:max-w-max lg:grid-cols-2">
                    <div class="relative">
                        <form data-aos="fade" data-aos-duration="1000" data-aos-delay="1000" action="https://api.web3forms.com/submit" method="POST" class="relative rounded-3xl border border-gray-100 bg-white p-8 shadow-2xl shadow-gray-600/10 dark:border-gray-700 dark:bg-gray-800 dark:shadow-none sm:p-12">
                            <input type="hidden" name="access_key" value="9866602c-783a-4b2b-a903-936145183f77">
                            <input type="hidden" name="redirect" value="https://zynex.info/pages/contact">
                            <input type="hidden" name="subject" value="New submission from Zynex">

                            <div class="absolute inset-0 hidden scale-105 rounded-3xl bg-gradient-to-b from-transparent dark:block dark:to-gray-900/80"></div>
                            <div class="relative">
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-white" data-aos="fade" data-aos-duration="1000" data-aos-delay="0">What should we know ?</h2>
                                <div class="mt-8 mb-6 space-y-4">
                                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
                                        <label for="name" class="mb-2 block text-gray-600 dark:text-gray-300">Your name <span class="text-xl text-red-500 dark:text-red-400">*</span></label>
                                        <input type="text" name="name" id="name" autocomplete="name" class="peer block w-full rounded-lg border border-gray-200 bg-transparent px-4 py-2 text-gray-600 transition-shadow duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 dark:border-gray-700" />
                                        <span class="mt-1 hidden text-sm text-red-500 peer-invalid:block">Helper</span>
                                    </div>
                                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
                                        <label for="email" class="mb-2 block text-gray-600 dark:text-gray-300">Work email <span class="text-xl text-red-500 dark:text-red-400">*</span></label>
                                        <input type="email" name="email" id="email" autocomplete="email" class="peer block w-full rounded-lg border border-gray-200 bg-transparent px-4 py-2 text-gray-600 transition-shadow duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 dark:border-gray-700" />
                                        <span class="mt-1 hidden text-sm text-red-500 peer-invalid:block">Helper</span>
                                    </div>
                                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
                                        <label for="phone" class="mb-2 block text-gray-600 dark:text-gray-300">Phone <span class="text-xl text-red-500 dark:text-red-400">*</span></label>
                                        <input type="tel" name="phone" id="phone" autocomplete="tel" class="peer block w-full rounded-lg border border-gray-200 bg-transparent px-4 py-2 text-gray-600 transition-shadow duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 dark:border-gray-700" />
                                        <span class="mt-1 hidden text-sm text-red-500 peer-invalid:block">Helper</span>
                                    </div>
                                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
                                        <label for="company" class="mb-2 block text-gray-600 dark:text-gray-300">Company name <span class="text-xl text-red-500 dark:text-red-400">*</span></label>
                                        <input type="text" name="company" id="company" autocomplete="work" class="peer block w-full rounded-lg border border-gray-200 bg-transparent px-4 py-2 text-gray-600 transition-shadow duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 dark:border-gray-700" />
                                        <span class="mt-1 hidden text-sm text-red-500 peer-invalid:block">Helper</span>
                                    </div>
                                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">
                                        <label for="message" class="mb-2 block text-gray-600 dark:text-gray-300">Message</label>
                                        <textarea name="message" id="message" class="peer block h-28 w-full rounded-lg border border-gray-200 bg-transparent px-4 py-2 text-gray-600 transition-shadow duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 dark:border-gray-700"></textarea>

                                        <span class="mt-1 hidden text-sm text-red-500 peer-invalid:block">Helper</span>
                                    </div>
                                </div>
                                <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

                                <p class="mb-8 text-sm text-gray-600 dark:text-gray-300" data-aos="fade" data-aos-duration="1000" data-aos-delay="0">By clicking submit below, you agree to the processing of your personal information by PlanetScale as described in the Privacy Policy.</p>

                                <button data-aos="fade" data-aos-duration="1000" data-aos-delay="300" type="submit" class="relative ml-auto flex h-11 w-max items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition-transform before:duration-300 active:duration-75 active:before:scale-95 dark:before:bg-primaryLight">
                                    <span class="relative text-base font-semibold text-white dark:text-gray-900">Get started</span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div>
                        <div data-aos="fade" data-aos-duration="1000" data-aos-delay="500" class="relative rounded-3xl border border-gray-100 bg-white p-8 shadow-2xl shadow-gray-600/10 dark:border-gray-700 dark:bg-gray-800 dark:shadow-none lg:px-12">
                            <div class="absolute inset-0 hidden scale-105 rounded-3xl bg-gradient-to-b from-transparent dark:block dark:to-gray-900/80"></div>
                            <div class="relative">
                                <img class="h-12 w-auto dark:contrast-100 dark:grayscale dark:invert" src="../images/logo-home-dark.png" alt="microsoft" width="" height="" />
                                <p class="mt-2 mb-8 text-gray-600 dark:text-gray-300">We guarantee to uphold the trust you place in us.</p>
                                <div class="flex gap-4">
                                    <img class="h-12 w-12 rounded-full" src="../images/avatars/tharuux.jpg" alt="user avatar" width="200" height="200" loading="lazy" />
                                    <div>
                                        <h2 class="leading-0 text-lg font-medium text-gray-700 dark:text-white">Tharusha Damsara</h2>
                                        <p class="leading-0 -mt-0.5 text-sm text-gray-500 dark:text-gray-400">Founder of ZYNEX</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 text-center" data-aos="fade" data-aos-duration="1000" data-aos-delay="500">
                            <p class="text-sm font-semibold tracking-widest dark:text-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Tools we using</p>

                            <div class="mt-8 flex flex-wrap justify-center gap-6 brightness-75 contrast-200 grayscale dark:brightness-200 dark:contrast-0 lg:gap-x-24">
                                <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="h-8 w-auto lg:h-10 lg:w-auto cursor-pointer hover:scale-105" src="../images/icons/nextjs-plain.svg" loading="lazy" alt="next js" width="" height="" />
                                <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" class="h-8 w-auto lg:h-10 lg:w-auto cursor-pointer hover:scale-105" src="../images/icons/react-original.svg" loading="lazy" alt="react" width="100" height="100" />
                                <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600" class="h-8 w-auto lg:h-10 lg:w-auto cursor-pointer hover:scale-105" src="../images/icons/nodejs-plain.svg" loading="lazy" alt="node js" width="" height="" />
                                <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900" class="h-8 w-auto lg:h-10 lg:w-auto cursor-pointer hover:scale-105" src="../images/icons/mongodb-plain.svg" loading="lazy" alt="mongo db" width="" height="" />
                                <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200" class="h-8 w-auto lg:h-10 lg:w-auto cursor-pointer hover:scale-105" src="../images/icons/mysql-original.svg" loading="lazy" alt="my sql" width="" height="" />
                                <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1500" class="h-8 w-auto lg:h-10 lg:w-auto cursor-pointer hover:scale-105" src="../images/icons/netlify-plain.svg" loading="lazy" alt="netlify" width="" height="" />
                                <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1800" class="h-8 w-auto lg:h-10 lg:w-auto cursor-pointer hover:scale-105" src="../images/icons/vercel-original.svg" loading="lazy" alt="vercel" width="" height="" />
                                <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2100" class="h-8 w-auto lg:h-10 lg:w-auto cursor-pointer hover:scale-105" src="../images/icons/github-original.svg" loading="lazy" alt="github" width="" height="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'components/footer.php'; ?>
    </body>

</html>
