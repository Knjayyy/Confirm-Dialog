 <template layout="default">


    <div class="container-md mx-auto p-8 w-3/4 -mt-48">
      <div class="flex justify-between items-center mb-3">
        <h1 class="text-3xl font-semibold text-white hover:text-blue-600">Members</h1>
        <Link href="/members/create" class="text-black rounded-lg border-2 border-solid hover:border-blue-500 hover:bg-gray-50 hover:text-gray-700 px-3 py-1 bg-gray-50"> + Add Member</Link>
      </div>
      <table class="w-full text-sm text-left text-gray-400">
        <thead class="text-sm text-gray-900 uppercase bg-cyan-700">
          <tr>
            <th scope="col" class="px-6 py-3"> ID </th>
            <th scope="col" class="px-6 py-3"> Last Name </th>
            <th scope="col" class="px-6 py-3"> First Name </th>
            <th scope="col" class="px-6 py-3"> Designation </th>
            <th scope="col" class="px-6 py-3"> Company </th>
            <th scope="col" class="px-6 py-3 text-center"> Actions </th>
          </tr>
        </thead>
        <tbody v-for="member of members" :key="member.id">
          <tr class="bg-white border-b">
            <td class="px-6 py-4"> {{ member.id }} </td>
            <td class="px-6 py-4"> {{ member.last_name }} </td>
            <td class="px-6 py-4"> {{ member.first_name }} </td>
            <td class="px-6 py-4"> {{ member.designation }} </td>
            <td class="px-6 py-4"> {{ member.company.name }} </td>
            <td class="px-6 py-4 text-center">
              <Link :href="'/members/edit/' + member.id" class="hover:text-blue-400"><i class="fa-solid fa-pen"></i></Link>
            </td>
          </tr>
        </tbody>
      </table>
      </div>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'


defineProps({
    'members': Array
})
const closeNotif = () => {
    const toast = document.getElementById('toast-top-left');
    toast.style.opacity = '0'
}
</script>

