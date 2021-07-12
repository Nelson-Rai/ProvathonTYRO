@extends('Layout.app')

@section('header')
    @include('Include.students')
@endsection

@section('content')
<div class="flex flex-col mt-3">
        <div class="flex space-x-4 w-full">
            <div >
                <select class="flex-1 w-96 bg-white" name="" id="">
                    <option value="">Select Class</option>
                    <option value="">Ten</option>
                    <option value="">Eleven</option>
                    <option value="">Twelve</option>
                    <option value="">BSc</option>
                    <option value="">BCA</option>
                </select>
            </div>
            <div >
                <select class="flex-1 w-96 bg-white" name="" id="">
                    <option value="">Select Subject</option>
                    <option value="">Ten</option>
                    <option value="">Eleven</option>
                    <option value="">Twelve</option>
                    <option value="">BSc</option>
                    <option value="">BCA</option>
                </select>
            </div>
        </div>
        <div class="flex  bg-blue-200 p-4  rounded-lg mt-6">
            <table class="table w-full text-justify">
                <thead class="border-b-2 border-gray-300 border-b-2 border-blue-400">
                    <tr>
                        <th>SN</th>
                        <th>Name of Students</th>
                        <th>Class</th>
                        <th>Address</th>
                        <th>Contact No.</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ruben Rai</td>
                        <td>Eleven</td>
                        <td>Damak, Jhapa</td>
                        <td>9800000000</td>
                        <td><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-comments ml-2" aria-hidden="true"></i></a>
                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nisha Bista</td>
                        <td>Ten</td>
                        <td>Damak, Jhapa</td>
                        <td>9800000000</td>
                        <td><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-comments ml-2" aria-hidden="true"></i></a>
                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Rita Subedi</td>
                        <td>BSc</td>
                        <td>Damak, Jhapa</td>
                        <td>9800000000</td>
                        <td><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-comments ml-2" aria-hidden="true"></i></a>
                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Rakesh Dhakal</td>
                        <td>BCA</td>
                        <td>Damak, Jhapa</td>
                        <td>9800000000</td>
                        <td><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-comments ml-2" aria-hidden="true"></i></a>
                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Rakesh Chaudhary</td>
                        <td>Eleven</td>
                        <td>Damak, Jhapa</td>
                        <td>9800000000</td>
                        <td><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-comments ml-2" aria-hidden="true"></i></a>
                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Rita B.K.</td>
                        <td>Eleven</td>
                        <td>Damak, Jhapa</td>
                        <td>9800000000</td>
                        <td><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-comments ml-2" aria-hidden="true"></i></a>
                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ruben Rai</td>
                        <td>Twelve</td>
                        <td>Damak, Jhapa</td>
                        <td>9800000000</td>
                        <td><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-comments ml-2" aria-hidden="true"></i></a>
                        <a href="#"><i class="fas fa-trash-alt ml-2"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection