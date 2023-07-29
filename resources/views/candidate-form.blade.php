    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                    <h1 class="font-bold text-xl text-dark-800 leading-tight mb-4">
                        Habar qoldiring
                    </h1>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-subject">
                                Subject
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="grid-subject" type="text" name="subject" placeholder="Subject...">
                            <p class="text-red text-xs italic">Please fill out this field.</p>
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-file">
                                File
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                id="grid-last-name" type="file" name="file">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-message">
                                Message
                            </label>
                            <textarea
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                                id="grid-message" name="message" rows="5" placeholder="Message..."></textarea>
                            <p class="text-grey-dark text-xs italic">Please fill out this field.</p>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-2">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
