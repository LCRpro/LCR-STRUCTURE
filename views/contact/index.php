
    <div class="min-h-screen bg-gray-800 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div
            class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="text-white relative px-4 py-10 bg-indigo-400 shadow-lg sm:rounded-3xl sm:p-20">

            <div class="text-center pb-6">
                <h1 class="text-3xl">Contacter moi !</h1>

                <p class="text-gray-300">
                    Je suis disponible via ce formulaire
                </p>
            </div>

            <form id="contactForm" action="#" method="POST">

                <input type="text" id="name"  class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" placeholder="Votre nom"><br>
                        <span id="nameError" class="error"></span>

                        <input type="email" id="email"  class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" placeholder="Votre email"><br>
                        <span id="emailError" class="error"></span>

                        <input type="text" id="sujet"  class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="sujet" placeholder="Votre sujet"><br>
                        <span id="sujetError" class="error"></span>

                <textarea
                        class="shadow mb-4 min-h-0 appearance-none border rounded h-64 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Votre message..." name="message" style="height: 121px;"></textarea>
                        <span id="messageError" class="error"></span>

                        <div class="g-recaptcha" data-sitekey="6Lc62sUpAAAAAAMcGVygRxv8qNhDgm7EBdSRtg-K"></div><br>

                <div class="flex justify-between">
                    <input
                        class="shadow bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" value="Envoyer ➤">
                        <div id="loader" style="display: none;">Loading...</div>
                </div>

            </form>
        </div>
    </div>
</div>

<script src="../../assets/js/contact.js"></script>


