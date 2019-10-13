<?xml version="1.0" encoding="UTF-8"?>
<assembly xmlns="urn:schemas-microsoft-com:asm.v3" manifestVersion="1.0" copyright="Copyright (c) Microsoft Corporation. All Rights Reserved.">
  <assemblyIdentity name="Microsoft-Windows-TaskScheduler-Service" version="6.1.7601.24470" processorArchitecture="wow64" language="neutral" buildType="release" publicKeyToken="31bf3856ad364e35" versionScope="nonSxS" />
  <dependency discoverable="no" resourceType="Resources">
    <dependentAssembly dependencyType="prerequisite">
      <assemblyIdentity name="Microsoft-Windows-TaskScheduler-Service.Resources" version="6.1.7601.24470" processorArchitecture="x86" language="*" buildType="release" publicKeyToken="31bf3856ad364e35" />
    </dependentAssembly>
  </dependency>
  <file name="SchedSvc.mof" destinationPath="$(runtime.wbem)\" sourceName="SchedSvc.mof" sourcePath=".\" importPath="$(build.nttree)\">
    <securityDescriptor name="WRP_FILE_DEFAULT_SDDL" />
    <asmv2:hash xmlns:asmv2="urn:schemas-microsoft-com:asm.v2">
      <dsig:Transforms xmlns:dsig="http://www.w3.org/2000/09/xmldsig#">
        <dsig:Transform Algorithm="urn:schemas-microsoft-com:HashTransforms.Identity" />
      </dsig:Transforms>
      <dsig:DigestMethod xmlns:dsig="http://www.w3.org/2000/09/xmldsig#" Algorithm="http://www.w3.org/2000/09/xmldsig#sha256" />
      <dsig:DigestValue xmlns:dsig="http://www.w3.org/2000/09/xmldsig#">KP/lCn08lhFeSQ3DkVWyJQrDUQ4BUfikHtmckURwvCE=</dsig:DigestValue>
    </asmv2:hash>
  </file>
  <directories>
    <directory destinationPath="$(runtime.system32)\Tasks\" owner="true">
      <securityDescriptor name="TasksFolderACL" />
    </directory>
    <directory destinationPath="$(runtime.system32)\Tasks\Microsoft\" owner="true">
      <securityDescriptor name="MicrosoftTasksFolderACL" />
    </directory>
  </directories>
  <memberships>
    <categoryMembership>
      <id name="Microsoft.Windows.Categories" version="1.0.0.0" publicKeyToken="365143bb27e7ac8b" typeName="SvcHost" />
      <categoryInstance subcategory="netsvcs">
        <serviceGroup xmlns="urn:schemas-microsoft-com:asm.v3" position="last" serviceName="schedule" />
      </categoryInstance>
    </categoryMembership>
  </memberships>
  <registryKeys>
    <registryKey keyName="HKEY_LOCAL_MACHINE\System\CurrentControlSet\Services\Schedule" owner="false" />
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Schedule\Configuration" owner="false">
      <registryValue name="DataVersion" valueType="REG_DWORD" value="0x00000003" owner="true" />
      <registryValue name="TasksInMemoryQueue" valueType="REG_DWORD" value="0x00000064" owner="true" />
      <registryValue name="TasksPerHighestPrivEngine" valueType="REG_DWORD" value="0x00000064" owner="true" />
      <registryValue name="TasksPerLeastPrivEngine" valueType="REG_DWORD" value="0x00000032" owner="true" />
      <registryValue name="MissedTasksStartupDelay" valueType="REG_DWORD" value="0x00000258" owner="true" />
      <securityDescriptor name="PrivateRegistryACL" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Schedule\Handlers" owner="false">
      <securityDescriptor name="PrivateRegistryACL" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Schedule\Aliases" owner="false">
      <registryValue name="AtServiceAccount" valueType="REG_MULTI_SZ" value="&quot;NT AUTHORITY\System&quot;" owner="true" />
      <securityDescriptor name="SystemRegistryACL" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Schedule\TaskCache" owner="false">
      <securityDescriptor name="SystemRegistryACL" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Schedule\TaskCache\Logon" owner="false">
      <securityDescriptor name="SystemRegistryACL" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Schedule\TaskCache\Tasks" owner="false">
      <securityDescriptor name="SystemRegistryACL" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Schedule\TaskCache\Tree" owner="false">
      <securityDescriptor name="SystemRegistryACL" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Schedule\TaskCache\Boot" owner="false">
      <securityDescriptor name="SystemRegistryACL" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\Schedule\TaskCache\Plain" owner="false">
      <securityDescriptor name="SystemRegistryACL" />
    </registryKey>
  </registryKeys>
  <trustInfo>
    <security>
      <accessControl>
        <securityDescriptorDefinitions>
          <securityDescriptorDefinition name="MicrosoftTasksFolderACL" sddl="D:P(A;CI;FA;;;BA)(A;OI;FRFWSDWDWO;;;BA)(A;CI;FA;;;SY)(A;OI;FRFWSDWDWO;;;SY)(A;OICI;FR;;;AU)(A;OICI;FR;;;LS)(A;OICI;FR;;;NS)(A;OICIIO;FA;;;CO)" operationHint="replace" />
          <securityDescriptorDefinition name="PrivateRegistryACL" sddl="D:P(A;OI;KA;;;BA)(A;OI;KA;;;SY)(A;;KR;;;AU)" operationHint="replace" />
          <securityDescriptorDefinition name="ServiceACL" sddl="D:(A;;CCLCSWLORC;;;AU)(A;;CCLCSWRPDTLOCRRCWDWO;;;BA)(A;;CCDCLCSWRPWPDTLOCRRCWDWOSD;;;SY)(A;;CCLCSWLORC;;;BU)S:(AU;FA;CCDCLCSWRPWPDTLOCRSDRCWDWO;;;WD)" operationHint="replace" />
          <securityDescriptorDefinition name="SystemRegistryACL" sddl="D:P(A;OICI;KRSD;;;BA)(A;OICI;KA;;;SY)" operationHint="replace" />
          <securityDescriptorDefinition name="TasksFolderACL" sddl="D:P(A;CI;FA;;;BA)(A;OI;FRFWSDWDWO;;;BA)(A;CI;FA;;;SY)(A;OI;FRFWSDWDWO;;;SY)(A;CI;FW;;;AU)(A;CI;FW;;;NS)(A;CI;FW;;;LS)(A;OICIIO;FA;;;CO)" operationHint="replace" />
          <securityDescriptorDefinition name="WRP_FILE_DEFAULT_SDDL" sddl="O:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464G:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464D:P(A;;FA;;;S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464)(A;;GRGX;;;BA)(A;;GRGX;;;SY)(A;;GRGX;;;BU)S:(AU;FASA;0x000D0116;;;WD)" operationHint="replace" description="Default SDDL for Windows Resource Protected file" />
        </securityDescriptorDefinitions>
      </accessControl>
    </security>
  </trustInfo>
  <localization>
    <resources culture="en-US">
      <stringTable>
        <string id="DebugChannelName" value="Debug" />
        <string id="description" value="Task Scheduler Service, responsible for the scheduling and running of tasks." />
        <string id="description2" value="Enables users, applications,