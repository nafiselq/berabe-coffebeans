<template>
     <section class="relative bg-[url('/img/coffee_image.png')] bg-no-repeat bg-cover bg-center md:h-screen md:h-screen h-[595px]">
            <div class="absolute inset-0 bg-gradient-to-r from-black/100 to-transparent"></div>
            <!-- Text Content -->
            <div class="overflow-hidden z-10 p-4 absolute
                md:top-[50%] top-[50%] left-[130px] transform -translate-x-1/2 -translate-y-1/2
                md:translate-x-0 md:left-21 md:right-auto">
                <p class="text-white text-xs md:text-xl">
                We’ve got your morning covered with
                </p>
                <p class="md:text-[220px] text-[100px] text-white font-clicker">
                Coffee
                </p>
                <p class="md:w-[527px] text-white md:text-[20px] text-[12px]"
                >It is best to start your day with a cup of coffee. Discover the best flavours coffee you will ever have. We provide the best for our customers.</p>
                <div class="mt-[20px]">
                    <BaseButton label="Order Now" variant="primary" size="md" />
                </div>
            </div>
        </section>
</template>