<template layout="default">
        <div class="w-full bg-gray-50 rounded-lg shadow dark:border mx-auto sm:max-w-md xl:p-0 -mt-36">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900">
                    Edit Company
                </h1>
                <form class="space-y-4 md:space-y-4" @submit.prevent="submit">
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 mb-1">Company Name</label>
                        <input :value="form.name" @input="form.name = $event.target.value" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4">
                        <div class="text-sm text-red-500" v-if="form.errors.name">{{ form.errors.name }}</div>
                    </div>
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 mb-1">Type</label>
                        <input :value="form.type" @input="form.type = $event.target.value" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4">
                        <div class="text-sm text-red-500" v-if="form.errors.type">{{ form.errors.type }}</div>
                    </div>
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 mb-1">Address</label>
                        <input :value="form.address" @input="form.address = $event.target.value" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4">
                        <div class="text-sm text-red-500" v-if="form.errors.address">{{ form.errors.address }}</div>
                    </div>
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 mb-1">Net Worth</label>
                        <input :value="form.net_worth" @input="form.net_worth = $event.target.value" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-4">
                        <div class="text-sm text-red-500" v-if="form.errors.net_worth">{{ form.errors.net_worth }}</div>
                    </div>

                    <div class="flex flex-col">
                        <button type="submit" class="w-full text-white bg-blue-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">Update Company</button>
                        <Link href="/companies" class="w-full text-white bg-gray-500 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2">Cancel</Link>
                    </div>
                </form>
            </div>
        </div>
</template>

<script setup>
import { useForm, Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
    company: Object
})

let form = useForm({
    name: props.company.name,
    type: props.company.type,
    address: props.company.address,
    net_worth: props.company.net_worth,
})

const submit = () => {
    if(props.company.name == form.name && props.company.type == form.type && props.company.address == form.address && props.company.net_worth == form.net_worth){
        alert("You've made no changes!")
    } else {
        form.put('/companies/' + props.company.id)
    }
}
</script>

