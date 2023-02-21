
@extends('admin.admin_dashboard')
@section('admin')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
<div class="">
      <div x-data="handleSelect">
  
                 <!-- Table -->
                 <div class="overflow-x-auto">
                  <table class="table-auto w-full bg-white" @click.stop="$dispatch('set-transactionopen', true)">
                      <!-- Table header -->
                      <thead class="text-xs font-semibold uppercase text-slate-500 border-t border-b border-slate-200">
                          <tr>
                              <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                  <div class="flex items-center">
                                      <label class="inline-flex">
                                          <span class="sr-only">Select all</span>
                                          <input id="parent-checkbox" class="form-checkbox" type="checkbox" @click="toggleAll" />
                                      </label>
                                  </div>
                              </th>
                              <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                  <div class="font-semibold text-left">Description</div>
                              </th>
                              <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                  <div class="font-semibold text-left">Transactions ID</div>
                              </th>
                              <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                  <div class="font-semibold text-left">Payment Date</div>
                              </th>
                              {{-- <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                  <div class="font-semibold text-left">Status</div>
                              </th> --}}
                              <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                  <div class="font-semibold text-right">Amount</div>
                              </th>
                              <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                  <div class="font-semibold text-right">Status</div>
                              </th>
                              <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                  <div class="font-semibold text-right">Method</div>
                              </th>
                          </tr>
                      </thead>
                      <!-- Table body -->
                      <tbody class="text-sm divide-y divide-slate-200 border-b border-slate-200">
                          <!-- Row -->
                          @foreach($transactdata as $trans)
                              @php                    
                                  if ($trans->status === 'Completed') :
                                      $status_color = 'bg-emerald-100 text-emerald-600';
                                  elseif ($trans->status === 'Canceled') :
                                      $status_color = 'bg-rose-100 text-rose-500';
                                  else :
                                      $status_color = 'bg-slate-100 text-slate-500';
                                  endif;
                                  if (substr($trans->amount, 0, 1) === '+') :
                                      $amount_color = 'text-emerald-500';
                                  else :
                                      $amount_color = 'text-slate-700';
                                  endif;
                              @endphp                     
                              <tr>
                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                      <div class="flex items-center">
                                          <label class="inline-flex">
                                              <span class="sr-only">Select</span>
                                              <input class="table-item form-checkbox" type="checkbox" @click.stop="uncheckParent" />
                                          </label>
                                      </div>
                                  </td>
                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap md:w-1/2">
                                      <div class="flex items-center">
                                          {{-- <div class="w-9 h-9 shrink-0 mr-2 sm:mr-3">
                                              <img class="w-9 h-9 rounded-full" src="" width="36" height="36" alt="{{ $trans->name }}" />
                                          </div> --}}
                                          <div class="font-medium text-slate-800">Deposit With {{ $trans->method }}</div>
                                      </div>
                                  </td>
                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap md:w-1/2">
                                      <div class="flex items-center">
                                          {{-- <div class="w-9 h-9 shrink-0 mr-2 sm:mr-3">
                                              <img class="w-9 h-9 rounded-full" src="" width="36" height="36" alt="{{ $trans->name }}" />
                                          </div> --}}
                                          <div class="text-left">TRX{{ \Carbon\Carbon::parse($trans->created_at)->format('time') }}{{ $trans->id }}</div>
                                      </div>
                                  </td>
                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                      <div class="text-left">{{ \Carbon\Carbon::parse($trans->created_at)->format('d/m/Y') }}</div>
                                  </td>
                                  {{-- <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                      <div class="text-left">
                                          <div class="text-xs inline-flex font-medium rounded-full text-center px-2.5 py-1 {{$status_color}}">{{ $trans->status }}</div>
                                      </div>
                                  </td> --}}
                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                      <div class="text-right font-medium {{$amount_color}}">{{ $trans->invest_amount }}</div>
                                  </td>
                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                      <div class="text-right font-medium {{$amount_color}}">{{ $trans->status }}</div>
                                  </td>
                                  <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                      <div class="text-right font-medium {{$amount_color}}">{{ $trans->method }}</div>
                                  </td>
                                 
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
      
              </div>
          </div>
      </div>
        </div>
        </div>
        </div>
      @endsection
      <script>
          // A basic demo function to handle "select all" functionality
          document.addEventListener('alpine:init', () => {
              Alpine.data('handleSelect', () => ({
                  selectall: false,
                  selectAction() {
                      countEl = document.querySelector('.table-items-action');
                      if (!countEl) return;
                      checkboxes = document.querySelectorAll('input.table-item:checked');
                      document.querySelector('.table-items-count').innerHTML = checkboxes.length;
                      if (checkboxes.length > 0) {
                          countEl.classList.remove('hidden');
                      } else {
                          countEl.classList.add('hidden');
                      }
                  },
                  toggleAll() {
                      this.selectall = !this.selectall;
                      checkboxes = document.querySelectorAll('input.table-item');
                      [...checkboxes].map((el) => {
                          el.checked = this.selectall;
                      });
                      this.selectAction();
                  },
                  uncheckParent() {
                      this.selectall = false;
                      document.getElementById('parent-checkbox').checked = false;
                      this.selectAction();
                  },
              }))
          })    
      </script>
      