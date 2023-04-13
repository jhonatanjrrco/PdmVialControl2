<div>
    <div
        class="relative w-full group  min-w-0 mx-auto mt-8 mb-6 break-words  border shadow-2xl bg-gray-800 border-gray-700  rounded-xl ml-1">
        <div class="pb-6">
            <div class="flex flex-wrap justify-start">
                <div class="flex justify-start w-full">

                    <div class="relative -mt-4 -ml-2">



                        <div class="w-12 h-12 object-cover rounded-full border-2    bg-gray-800 border-gray-700">
                            <i class="ml-3.5 mt-5 fa-regular fa-file-lines fa-lg"></i>
                        </div>  



                    </div>
                </div>
            </div>
            <div class="  text-center -mt-6">
                <h1
                    class=" bg-gradient-to-tr from-gray-600 to-gray-200 bg-clip-text font-sans text-3xl font-semibold leading-tight tracking-normal text-transparent antialiased mb-4">
                    Boleta</h1>
            </div>

            @if ($message)

                <script>
                    Swal.fire({
                            title: 'Título de la alerta',
                            text: {!! json_encode($message) !!},
                            icon: 'success',
                            confirmButtonText: 'Aceptar',
                            color: 'white'
                            })
                </script>
            @endif

        <form wire:submit.prevent="saveBoleta">
            <div class=" mt-15 ml-2 mr-2 text-center">

                <!-- Form Contenido  -->

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium ">
                                Motivo
                            </label>


                            <select wire:model="selectedOption" id="select"  class="form-control w-full rounded-md border border-[#e0e0e0] py-3 px-6 text-base bg-cyan-800  focus:bg-white focus:text-gray-800 text-[#9CA3A2] font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" >
                                <option value="">Seleccione una opción</option>
                                @foreach ($parroquias as $parroquia)
                                    <option value="{{ $parroquia->nombre }}">{{ $parroquia->nombre }}</option>
                                @endforeach
                            </select>


                        </div>
                    </div>

                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium ">
                                First Name
                            </label>
                            <input type="text" name="fName" id="fName" placeholder="First Name"
                                class="w-full rounded-md border border-[#e0e0e0] py-3 px-6 text-base bg-cyan-800  focus:bg-white focus:text-gray-800 font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium ">
                                Last Name
                            </label>
                            <input type="text" name="lName" id="lName" placeholder="Last Name"
                                class="w-full rounded-md border border-[#e0e0e0] py-3 px-6 text-base bg-cyan-800  focus:bg-white focus:text-gray-800 font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium ">
                                Parroquia
                            </label>


                            <select wire:model="selectedOption" id="select"  class="form-control w-full rounded-md border border-[#e0e0e0] py-3 px-6 text-base bg-cyan-800  focus:bg-white focus:text-gray-800 text-[#9CA3A2] font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" >
                                <option value="">Seleccione una opción</option>
                                @foreach ($parroquias as $parroquia)
                                    <option value="{{ $parroquia->nombre }}">{{ $parroquia->nombre }}</option>
                                @endforeach
                            </select>


                        </div>
                    </div>

                </div>
                <div class="mb-5">
                    <label for="guest" class="mb-3 block text-base font-medium ">
                        How many guest are you bringing?
                    </label>
                    <input type="number" name="guest" id="guest" placeholder="5" min="0"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] py-3 px-6 text-base bg-cyan-800  focus:bg-white focus:text-gray-800  font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium ">
                                Date
                            </label>
                            <input type="date" name="date" id="date"
                                class="w-full rounded-md border border-[#e0e0e0] py-3 px-6 text-base bg-cyan-800  focus:bg-white focus:text-gray-800  font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="time" class="mb-3 block text-base font-medium ">
                                Time
                            </label>
                            <input type="time" name="time" id="time" list="listtime"
                                class="w-full rounded-md border border-[#e0e0e0] py-3 px-6 text-base bg-cyan-800  focus:bg-white focus:text-gray-800  font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <datalist id="listtime">

                                <option value="08:00">
                                <option value="09:00">
                                <option value="10:00">
                                <option value="11:00">
                                <option value="12:00">
                                <option value="13:00">
                                <option value="14:00">
                                <option value="15:00">
                                <option value="16:00">
                                <option value="17:00">


                            </datalist>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="mb-3 block text-base font-medium ">
                        Are you coming to the event?
                    </label>
                    <div class="flex items-center space-x-6">
                        <div class="flex items-center">
                            <input type="radio" name="radio1" id="radioButton1" class="h-5 w-5" />
                            <label for="radioButton1" class="pl-3 text-base font-medium ">
                                Yes
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                            <label for="radioButton2" class="pl-3 text-base font-medium ">
                                No
                            </label>
                        </div>
                    </div>
                </div>




                <!-- Fin de form  Contenido -->
                <!-- BOTONES -->
                <div>
                    <div class="group fixed bottom-12 right-8    flex items-end justify-end w-24 h-24 ">
                        <!-- main -->
                        <div
                            class="text-white shadow-xl flex items-center justify-center p-3 rounded-full  bg-cyan-900 border-4 border-[#0F172A] z-50 absolute  ">
                            <div class="w-6 h-6 text-center group-hover:rotate-90 transition  transition-all duration-[0.6s]">
                                <i class="fa-solid fa-ellipsis-vertical fa-lg"></i>
                            </div>
                        </div>
                        <!-- sub left -->
                        <div
                            class="absolute rounded-full transition-all duration-[0.2s] ease-out scale-y-0 group-hover:scale-y-100 group-hover:-translate-x-16   flex  p-2 hover:p-3 bg-cyan-900 border-4 border-[#0F172A]  scale-100 hover:bg-cyan-600 text-white">
                            <i class="w-6 h-6 pt-3 text-center fa-solid fa-house fa-lg"></i>
                        </div>
                        <!-- sub top -->
                        <div
                            class="absolute rounded-full transition-all duration-[0.2s] ease-out scale-x-0 group-hover:scale-x-100 group-hover:-translate-y-16  flex  p-2 hover:p-3  bg-cyan-900 border-4 border-[#0F172A]  hover:bg-cyan-600  text-white">
                            <i class="w-6 h-6 pt-3 text-center fa-regular fa-floppy-disk fa-lg"></i>
                        </div>
                        <!-- sub middle -->
                        <div
                            class="absolute rounded-full transition-all duration-[0.2s] ease-out scale-x-0 group-hover:scale-x-100 group-hover:-translate-y-14 group-hover:-translate-x-14   flex  p-2 hover:p-3  bg-cyan-900 border-4 border-[#0F172A]  hover:bg-cyan-600 text-white">
                            <i class="w-6 h-6 pt-3 text-center fa-solid fa-ban fa-lg"></i>
                        </div>
                    </div>
                </div>
                <!-- BOTONES FIN -->
            </div>
        </form>
        </div>
    </div>

</div>
