@extends('admin.admin_dashboard')
@section('admin')
<div class="main-content">

      <div class="page-content">
          <div class="container-fluid">
              
              <!-- start page title -->
              {{-- <div class="row">
                  <div class="col-12">
                      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                          <h1 class="mb-sm-0 ">Deposit</h1>

                          

                      </div>
                  </div>
              </div> --}}
              <!-- end page title -->
              <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
                  <!-- Welcome banner -->
                  {{-- <x-dashboard.deposit-banner /> --}}
                  <section class="mt-10">
                  <form action="/user/addmoney" method="POST" class=" py-8 w-full max-w-9xl mx-auto">
                     @csrf
            
                          <!-- Select -->
                          <div>
                              <h2 class="text-2xl text-slate-800 font-bold mb-6">Deposit</h2>
                              <label  for="method" class="block text-sm font-medium mb-1">Country</label>
                              <select name="method" class="form-select">
                                  <option value="Paypal" {{old('method') == "Paypal" ? 'selected' : ''}}>Paypal</option>
                                  <option value="Bpi"  {{old('method') == "Bpi" ? 'selected' : ''}}>Bpi</option>
                                  <option value="Gcash"  {{old('method') == "Gcash" ? 'selected' : ''}}>Gcash</option>
                              </select>
                              @error('method')
                              <p class="text-red-500 text-xs mt-2">
                                 invalid
                           </p>
                              @enderror
                          </div>
            
                          <!-- Start -->
                          <div>
                              <label for="invest_amount" class="block text-sm font-medium mb-1" for="mandatory">Enter Amount <span class="text-rose-500">*</span></label>
                              <input type="number" name="invest_amount" class="form-input w-full"  autocomplete="off" value={{old('invest_amount')}}>
                              @error('invest_amount')
                              <p class="text-red-500 text-xs mt-2">
                                  {{$message}}
                              </p>
                              @enderror
                          </div>
            
                          <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transitionduration-200 mt-5 p-2" type="submit">Proceed Payment</button>
                    
                      </form>
                   </section>
               
                          <!-- End -->
            
            
            
                          <!-- Table Row with Accordion -->
                          <div>
                              <h2 class="text-2xl text-slate-800 font-bold mb-6">Review Details</h2>
                              <!-- Start -->
                              <div class="rounded-sm border border-slate-200">
                                  <div class="overflow-x-auto">
                                      <table class="table-auto w-full divide-y divide-slate-200">
                                          <!-- Table body -->
                                          <tbody class="text-sm" x-data="{ open: false }">
                                              <!-- Row -->
                                              <tr>
                                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                                      <div class="flex items-center text-slate-800">
                                                          <div class="font-medium text-slate-800">Amount</div>
                                                      </div>
                                                  </td>
                                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                                      <div class="text-left font-medium text-emerald-500">$129.00</div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                                      <div class="flex items-center text-slate-800">
                                                          <div class="font-medium text-slate-800">Charge</div>
                                                      </div>
                                                  </td>
                                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                                      <div class="text-left font-medium text-emerald-500">10%</div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                                      <div class="flex items-center text-slate-800">
                                                          <div class="font-medium text-slate-800">Payment Method</div>
                                                      </div>
                                                  </td>
                                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                                      <div class="text-left font-medium text-emerald-500">$12.9</div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                                      <div class="flex items-center text-slate-800">
                                                          <div class="font-medium text-slate-800">Total</div>
                                                      </div>
                                                  </td>
                                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                                      <div class="text-left font-medium text-emerald-500">$129.00</div>
                                                  </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                              <!-- End -->
                          </div>
            
              </div>
             
      
  </div>
  </div>
 

  @endsection