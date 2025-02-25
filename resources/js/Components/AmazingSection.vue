<template>
    <section class="relative bg-[url('/img/bg-coffe.png')] bg-no-repeat bg-cover bg-center h-[574px] mt-[82px]">
        <div class="absolute inset-0 bg-primary opacity-[70%]"></div>
        <div class="overflow-hidden z-10 p-4 absolute
                md:top-[50%] top-[50%] left-[130px] transform -translate-x-1/2 -translate-y-1/2
                md:translate-x-0 md:left-21 md:right-auto">>
            <h1 class="font-sans text-white text-[54px] font-bold w-[595px]">Get a chance to have an Amazing morning</h1>
            <p class="font-sans text-white opacity-[80%] text-[20px] w-[409px]">We are giving you are one time opportunity to experience a better life with coffee.</p>
            <div class="mt-[22px]">
                <BaseButton label="Order Now" variant="primary" size="md" />
            </div>
        </div>
        <img class="absolute right-0" src="/img/right-coffe.png"/>
    </section>
</template>